    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('news::comment.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#news-comment-entry' data-href='{{guard_url('news/comment/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($comment->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#news-comment-entry' data-href='{{ guard_url('news/comment') }}/{{$comment->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#news-comment-entry' data-datatable='#news-comment-list' data-href='{{ guard_url('news/comment') }}/{{$comment->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('news-comment-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('news/comment'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('news::comment.name') !!}  [{!! $comment->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('news::admin.comment.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>