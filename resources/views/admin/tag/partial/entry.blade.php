            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('news::tag.label.name'))
                       -> placeholder(trans('news::tag.placeholder.name'))!!}
                </div>

               

                <div class='col-md-4 col-sm-6'>
                  {!! Form::select('status')
                  -> options(trans('news::tag.options.status'))
                   -> label(trans('news::tag.label.status'))!!}
                </div>
            </div>