            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('news::category.label.name'))
                       -> placeholder(trans('news::category.placeholder.name'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                  {!! Form::select('status')
                  -> options(trans('news::category.options.status'))
                   -> label(trans('news::category.label.status'))!!}
                </div>
            </div>