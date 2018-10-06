<section class="title">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center">
                    <h1>Lavalite News</h1>
                    <form action="#" class="search search-full">
                        <input type="text" name="search[title]" class="form-control" placeholder="Search existing news">
                        <button class="btn btn-primary" type="submit"><i class="ti-search"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </section>
          <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                      <img class="img-responsive center-block" src="{!!url($news->defaultImage('images' , 'lg'))!!}" alt="{{$news->title}}">
                                    </div>
                                    <div class="content">
                                        <h4>{{$news['title']}}</h4>
                                        <div class="metas mt-20 clearfix"> 
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

