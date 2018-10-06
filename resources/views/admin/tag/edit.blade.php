    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#tag" data-toggle="tab">{!! trans('news::tag.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#news-tag-edit'  data-load-to='#news-tag-entry' data-datatable='#news-tag-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#news-tag-entry' data-href='{{guard_url('news/tag')}}/{{$tag->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('news-tag-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('news/tag/'. $tag->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="tag">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('news::tag.name') !!} [{!!$tag->name!!}] </div>
                @include('news::admin.tag.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>