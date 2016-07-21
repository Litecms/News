<div class="dashboard-content">
    <div class="panel panel-color panel-inverse">
        <div class="panel-heading">
            <h3 class="panel-title">
                {!!Trans('news::news.user_names')!!}
            </h3>
            <p class="panel-sub-title m-t-5 text-muted">{!!Trans('news::news.create')!!}</p>
        </div>
        {!!Form::vertical_open()
	    ->id('create-news-news')
	    ->method('POST')
	    ->files('true')
	    ->action(URL::to('user/news/news'))!!}
        <div class="panel-body">
            <div class="row">
	            @include('news::user.news.partial.entry')
                <div class="col-md-12 m-t-30">
                    <button class="btn btn-warning">
                        Create News
                    </button>
                    <a href="{!!trans_url('/user/news/news')!!}" class="btn btn-default waves-effect waves-float m-l-5"> Cancel</a>                        </div> 
                </div>  
            </div>
        </div>              
	    {!! Form::close() !!}
    </div>
        