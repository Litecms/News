


<div class="box-header with-border">
    <h3 class="box-title"> {{ trans('cms.new') }}  {!! trans('news::news.name') !!} </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#news-news-create'  data-load-to='#news-news-entry' data-datatable='#news-news-list'><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#news-news-entry' data-href='{{Trans::to('admin/news/news/0')}}'><i class="fa fa-times-circle"></i> {{ trans('cms.close') }}</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">News</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('news-news-create')
        ->method('POST')
        ->files('true')
        ->action(URL::to('admin/news/news'))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="details">
                @include('news::admin.news.partial.entry')
                <div class='col-md-6 col-sm-6'>
                    <label>Images</label>
                    {!! Filer::uploader('images', $news->getUploadURL('images')) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>