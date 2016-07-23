<div class="dashboard-content">
    <div class="panel panel-color panel-inverse">
         <div class="panel-heading">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h3 class="panel-title">
                         {!! trans('news::news.user_names') !!}
                    </h3>
                    <p class="panel-sub-title m-t-5 text-muted">
                       {!! trans('news::news.user_name') !!}
                    </p>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="row m-t-5">
                        <div class="col-xs-12 col-sm-7 m-b-5">

                                {!!Form::open()
                                    ->method('GET')
                                    ->action(URL::to('user/news/news'))!!}
                                    <div class="input-group">
                                    {!!Form::text('search')->type('text')->class('form-control')->placeholder('Search for News')->raw()!!}
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-danger" type="button">
                                                <i class="icon-magnifier">
                                                </i>
                                            </button>
                                        </span>
                                        </div>
                                {!! Form::close()!!}

                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <a class=" btn btn-success btn-block text-uppercase f-12" href="{{ trans_url('/user/news/news/create') }}">
                                {{ trans('cms.create')  }} News
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($news as $news)
        <div class="panel-body" id="{!! $news->getRouteKey() !!}">
            <div class="popular-post-block">
                <div class="row">
                    <div class="dashboard-blog-pic">

                       <a href="{{trans_url('news')}}/{{@$news['slug']}}"> <img alt="" class="img-responsive" src="{!!url($news->defaultImage('news.sm','images'))!!}"></a>


                    </div>
                    <div class="dashboard-blog-desc popular-post-inner">
                        <div class="popular-post-desc">
                            <a href="{{trans_url('news')}}/{{@$news['slug']}}">
                                <h4>
                                    {{$news['title']}}
                                </h4>
                            </a>
                            <p>
                                {{$news['published_on']}}
                            </p>
                        </div>
                    </div>
                    <div class="dashboard-blog-actions text-right">
                        <a class="btn btn-icon waves-effect btn-success m-b-5" href="{{trans_url('news')}}/{{@$news['slug']}}">
                            <i class="fa fa-eye">
                            </i>
                        </a>
                        <a class="btn btn-icon waves-effect btn-primary m-b-5" href="{{ trans_url('/user') }}/news/news/{!! $news->getRouteKey() !!}/edit">
                            <i class="fa fa-pencil">
                            </i>
                        </a>
                        <a class="btn btn-icon waves-effect btn-danger" data-action="DELETE" data-href="{{ trans_url('/user/news/news') }}/{!! $news->getRouteKey() !!}" data-remove="{!! $news->getRouteKey() !!}">
                            <i class="fa fa-trash">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
