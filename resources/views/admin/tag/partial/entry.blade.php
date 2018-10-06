            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('news::tag.label.name'))
                       -> placeholder(trans('news::tag.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::numeric('frequency')
                       -> label(trans('news::tag.label.frequency'))
                       -> placeholder(trans('news::tag.placeholder.frequency'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                  {!! Form::select('published')
                  -> options(trans('news::tag.options.published'))
                   -> label(trans('news::tag.label.published'))!!}
                </div>
            </div>