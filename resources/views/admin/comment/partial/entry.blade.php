            <div class='row'>
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