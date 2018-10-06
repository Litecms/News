@include('news::public.news.partial.header')
            <section class="grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sidebar">
                                
                                <div class="widget search">
                                    <form action="">
                                        <input type="text" class="form-control" placeholder="Keywords.." name="search[tag]" required="">
                                        <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                                
                                <div class="widget category">
                                    
                                    <ul class="mt-20">
                                         @include('news::public.news.partial.aside')
                                    </ul>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="main-area parent-border">
                                <div class="row mb30">
                                    @foreach($news as $news)
                                    <div class="col-sm-6">
                                        <div class="newest-item border">
                                            <div class="feature">
                                                <a href="{{trans_url('news')}}/{{@$news['slug']}}">
                                                    <img src="{{url($news->defaultImage('images','sm'))}}" class="img-responsive center-block" alt="">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4><a href="{{trans_url('news')}}/{{@$news['slug']}}">{{$news['title']}}</a></h4>
                                                <div class="metas mt20">
                                                    <div class="tag pull-left">
                                                        <a href="{{trans_url('news/category')}}/{{@$news->category->slug}}" class="">{{ @$news->category->name}}</a>
                                                    </div>
                                                    <div class="date-time pull-right">
                                                        <span><i class="fa fa-calendar"></i>{{format_date($news['created_at'])}}</span>
                                                    </div>
                                                </div>
                                                <div class="divider"></div>
                                                <div class="author">
                                                    <div class="avatar pull-left">
                                                        <img class="img-circle" src="img/blogs/author-03.jpg" alt="">
                                                    </div>
                                                    <p>by <span class="text-primary">{{@$news->user->name}}</span></p>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            
                             
                        </div>
                    </div>
                </div>
            </section>

