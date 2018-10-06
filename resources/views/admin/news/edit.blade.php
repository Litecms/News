    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#news" data-toggle="tab">{!! trans('news::news.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#news-news-edit'  data-load-to='#news-news-entry' data-datatable='#news-news-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#news-news-entry' data-href='{{guard_url('news/news')}}/{{$news->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('news-news-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('news/news/'. $news->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="news">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('news::news.name') !!} [{!!$news->name!!}] </div>
                @include('news::admin.news.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>