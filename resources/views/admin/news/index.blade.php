@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('news::news.name') !!} <small> {!! trans('cms.manage') !!} {!! trans('news::news.names') !!}</small>
@stop

@section('title')
{!! trans('news::news.names') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{!! trans_url('admin') !!}"><i class="fa fa-dashboard"></i> {!! trans('cms.home') !!} </a></li>
    <li class="active">{!! trans('news::news.names') !!}</li>
</ol>
@stop

@section('entry')
<div class="box box-warning" id='news-news-entry'>
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="news-news-list" class="table table-striped table-bordered data-table">
    <thead>
        <th>{!! trans('news::news.label.title')!!}</th>
        <th>{!! trans('news::news.label.published_on')!!}</th>
        <th>{!! trans('news::news.label.status')!!}</th>
        <th>{!! trans('news::news.label.published')!!}</th>
    </thead>
    <thead  class="search_bar">
        <th>{!! Form::text('search[title]')->raw()!!}</th>
        <th>{!! Form::text('search[published_on]')->id('published_on')->raw()!!}</th>
        <th>{!! Form::select('search[status]')
                ->options(['' => 'All','Hide' => 'Hide','Show' => 'Show'])
                ->raw()!!}</th>
        <th>{!! Form::select('search[published]')
                ->options(['' => 'All','Yes' => 'Published', 'No' => 'Unpublished'])
                ->raw()!!}</th>
    </thead>
</table>
@stop

@section('script')
<script type="text/javascript">

var oTable;
$(document).ready(function(){
    $("#published_on").pickadate({
        format: 'dd mmm, yyyy',
        formatSubmit: 'yyyy-mm-dd',
        hiddenSuffix: '',
        selectMonths: true,
        selectYears: true
    }).prop('type','text');
    app.load('#news-news-entry', '{!!URL::to('admin/news/news/0')!!}');
    oTable = $('#news-news-list').dataTable( {
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! trans_url('/admin/news/news') !!}',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $('#news-news-list .search_bar input, #news-news-list .search_bar select').each(
                function(){
                    aoData.push( { 'name' : $(this).attr('name'), 'value' : $(this).val() } );
                }
            );
            app.dataTable(aoData);
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },
        "columns": [
            {data :'title'},
            {data :'published_on'},
            {data :'status'},
            {data :'published'},
        ],
        "pageLength": 50
    });

    $('#news-news-list tbody').on( 'click', 'tr', function () {

        if ($(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        } else {
            oTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }

        var d = $('#news-news-list').DataTable().row( this ).data();

        $('#news-news-entry').load('{!!URL::to('admin/news/news')!!}' + '/' + d.id);

    });
    $("#news-news-list .search_bar input").on('keyup select', function (e) {
        e.preventDefault();
        if (e.keyCode == 13 || e.keyCode == 9) {
            oTable.api().draw();
        }
    });
    $("#news-news-list .search_bar select, #published_on").on('change', function (e) {
        e.preventDefault();
        oTable.api().draw();
    });
    
});
</script>
@stop

@section('style')
@stop

