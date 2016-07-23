<div class="box-header with-border">
    <h3 class="box-title"> {{ trans('cms.view') }}   {!! trans('news::news.name') !!}  [{!! $news->title !!}]  </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-default btn-sm" data-action='NEW' data-load-to='#news-news-entry' data-href='{{trans_url('admin/news/news/create')}}'><i class="fa fa-times-circle"></i> New</button>
        @if($news->id )
        @if($news->published == 'Yes')
            <button type="button" class="btn btn-warning btn-sm" data-action="PUBLISHED" data-load-to='#news-news-entry' data-href="{{trans_url('admin/news/news/status/'. $news->getRouteKey())}}" data-value="No" data-datatable='#news-news-list'><i class="fa fa-times-circle"></i> Suspend</button>
        @else
            <button type="button" class="btn btn-success btn-sm" data-action="PUBLISHED" data-load-to='#news-news-entry' data-href="{{trans_url('admin/news/news/status/'. $news->getRouteKey())}}" data-value="Yes" data-datatable='#news-news-list'><i class="fa fa-check"></i> Published</button>
        @endif
        <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#news-news-entry' data-href='{{ trans_url('/admin/news/news') }}/{{$news->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> Edit</button>
        <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#news-news-entry' data-datatable='#news-news-list' data-href='{{ trans_url('/admin/news/news') }}/{{$news->getRouteKey()}}' >
        <i class="fa fa-times-circle"></i> Delete
        </button>
        @endif
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('news::news.name') !!}</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('news-news-show')
        ->method('POST')
        ->files('true')
        ->action(URL::to('admin/news/news'))!!}
            <div class="tab-content">
                <div class="tab-pane active" id="details">
                    @include('news::admin.news.partial.entry')
                    <div class='col-md-6 col-sm-6'>
                    
                     <label>Images</label><br>
                               
                     @forelse($news->getImages('news.sm', 'images') as $image)
                     <div class="col-md-2">
                    <img src="{!!url(@$image)!!}" class="img-responsive" > 
                    </div>
                @empty
                @endif
                    
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>