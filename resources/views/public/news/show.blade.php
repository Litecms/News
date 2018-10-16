@include('news::news.partial.header')

          <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sidebar">
                                
                                <div class="widget search">
                                    <form action="{{url('news')}}">
                                        <input type="text" class="form-control" placeholder="Keywords.." name="search[tag]" required="">
                                        <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
                                    </form>
                                </div>
                                
                                <div class="widget category">
                                    
                                    <ul class="mt-20">
                                         @include('news::news.partial.aside')
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                      <img class="img-responsive center-block" src="{!!url($news->defaultImage('images' , 'original'))!!}" alt="{{$news->title}}">
                                    </div>
                                    <div class="content">
                                        <h4>{{$news['title']}}</h4>
                                        <div class="metas mt-20 clearfix"> 
                                            <div class="tag pull-left">     
                                                <a href="{{trans_url('news/category')}}/{{@$news->category->slug}}" class="btn btn-primary btn-round">{{@$news->category->name}}</a> 
                                            </div>
                                            <div class="date-time pull-right">    
                                                <span> <img class="img-circle" src="{{@$news->user->picture}}" alt=""></span>
                                                <span><a href="" class="text-black">by <span class="text-primary">{{@$news->user->name}}</span></a></span>
                                                <span><i class="fa fa-calendar"> {{format_date($news['created_at'])}}</i></span>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <p>{!! $news['description'] !!}</p>
                                       <ul class="list-inline tags mt-40">
                                            @if (!empty($news->tag))
                                                @foreach ($news->tag as $tag) 
                                                    <li><a href="{{trans_url('news/tag')}}/{{@$tag}}">{{@$tag}}</a></li>
                                                
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </section>

