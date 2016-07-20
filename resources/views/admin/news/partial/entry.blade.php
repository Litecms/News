<div class='col-md-6 col-sm-6'>
       {!! Form::text('title')
       -> label(trans('news::news.label.title'))
       -> placeholder(trans('news::news.placeholder.title'))
       -> required()!!}
</div>


<div class='col-md-6 col-sm-6'>
       {!! Form::select('status')
        -> options(trans('news::news.options.status'))
       -> label(trans('news::news.label.status'))
       -> placeholder(trans('news::news.placeholder.status'))
       !!}
</div>

<div class='col-md-12 col-sm-12'>
       {!! Form::textarea('description')
       -> addClass('html-editor')
       -> label(trans('news::news.label.description'))
       -> placeholder(trans('news::news.placeholder.description'))!!}
</div>

<script type="text/javascript">
$(function () {
      $("#published_on").pickadate({
        format: 'dd mmm, yyyy',
        formatSubmit: 'yyyy-mm-dd',
        hiddenSuffix: '',
        selectMonths: true,
        selectYears: true
    }).prop('type','text');
});
</script>