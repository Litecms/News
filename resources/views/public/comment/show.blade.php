            @include('news::public.comment.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('news::public.comment.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($comment->defaultImage('images' , 'xl'))!!}" alt="{{$comment->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('news::comment.label.id') !!}
                </label><br />
                    {!! $comment['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="comment">
                    {!! trans('news::comment.label.comment') !!}
                </label><br />
                    {!! $comment['comment'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="author">
                    {!! trans('news::comment.label.author') !!}
                </label><br />
                    {!! $comment['author'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="email">
                    {!! trans('news::comment.label.email') !!}
                </label><br />
                    {!! $comment['email'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="mobile">
                    {!! trans('news::comment.label.mobile') !!}
                </label><br />
                    {!! $comment['mobile'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="slug">
                    {!! trans('news::comment.label.slug') !!}
                </label><br />
                    {!! $comment['slug'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="published">
                    {!! trans('news::comment.label.published') !!}
                </label><br />
                    {!! $comment['published'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('news::comment.label.user_id') !!}
                </label><br />
                    {!! $comment['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_type">
                    {!! trans('news::comment.label.user_type') !!}
                </label><br />
                    {!! $comment['user_type'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="news_id">
                    {!! trans('news::comment.label.news_id') !!}
                </label><br />
                    {!! $comment['news_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('news::comment.label.created_at') !!}
                </label><br />
                    {!! $comment['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('news::comment.label.updated_at') !!}
                </label><br />
                    {!! $comment['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('news::comment.label.deleted_at') !!}
                </label><br />
                    {!! $comment['deleted_at'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-12'>
                    {!! Form::textarea('comment')
                    -> label(trans('news::comment.label.comment'))
                    -> dataUpload(trans_url($comment->getUploadURL('comment')))
                    -> addClass('html-editor')
                    -> placeholder(trans('news::comment.placeholder.comment'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('author')
                       -> label(trans('news::comment.label.author'))
                       -> placeholder(trans('news::comment.placeholder.author'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('email')
                       -> label(trans('news::comment.label.email'))
                       -> placeholder(trans('news::comment.placeholder.email'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('mobile')
                       -> label(trans('news::comment.label.mobile'))
                       -> placeholder(trans('news::comment.placeholder.mobile'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                   {!! Form::inline_radios('published')
                   -> radios(trans('news::comment.options.published'))
                   -> label(trans('news::comment.label.published'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('news_id')
                       -> label(trans('news::comment.label.news_id'))
                       -> placeholder(trans('news::comment.placeholder.news_id'))!!}
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



