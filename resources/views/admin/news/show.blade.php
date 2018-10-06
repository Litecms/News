    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('news::news.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#news-news-entry' data-href='{{guard_url('news/news/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($news->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#news-news-entry' data-href='{{ guard_url('news/news') }}/{{$news->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#news-news-entry' data-datatable='#news-news-list' data-href='{{ guard_url('news/news') }}/{{$news->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('news-news-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('news/news'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('news::news.name') !!}  [{!! $news->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('news::admin.news.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>