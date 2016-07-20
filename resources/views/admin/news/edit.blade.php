<div class="box-header with-border">
    <h3 class="box-title"> Edit  {!! trans('news::news.name') !!} [{!!$news->title!!}] </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#news-news-edit'  data-load-to='#news-news-entry' data-datatable='#news-news-list'><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#news-news-entry' data-href='{{Trans::to('admin/news/news')}}/{{$news->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('cms.cancel') }}</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#news" data-toggle="tab">{!! trans('news::news.tab.name') !!}</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('news-news-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(URL::to('admin/news/news/'. $news->getRouteKey()))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="news">
            
                @include('news::admin.news.partial.entry')

                <div class='col-md-6 col-sm-6'>
                    <label>Images</label>
                    {!! Filer::uploader('images', $news->getUploadURL('images')) !!}
                </div>
                <div class='col-md-6 col-sm-6'>
                    <label>Uploaded Images</label>
                    {!! Filer::editor('images', $news['images']) !!}
                </div>
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>