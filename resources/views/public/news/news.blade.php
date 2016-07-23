
        <section class="news-wraper">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <h1 class="main-title">
                            <small>Latest News</small>
                            Our <span>News</span>
                        </h1>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs text-right">
                        <img src="{{trans_url('img/news-side-icon.png')}}" alt="">
                    </div>
                </div>
                <div class="row m-t-40">

                 @forelse($news as $value)
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="news-item">
                            <div class="row">
                                <div class="col-sm-6">
                                
                              
                                                <img src="{!!trans_url(@$value->defaultImage('sm','image'))!!}" class="img-responsive" alt="">
                                                
                                </div>
                                <?php
                                $timestamp = strtotime($value['published_on']);
                                $day = date('D', $timestamp);
                               ?>
                                <div class="col-sm-6 news-item-inner">
                                    <div class="news-item-desc">
                                        <a href="#"><h3 class="news-title">{{@$value['title']}}</h3></a>
                                        <p class="news-date">{{@$day}} , {{@$value['published_on']}}</p>
                                        <p class="news-desc">{!!substr($value['description'],0,50)!!}...</p>
                                        <a class="news-link" href="{{trans_url('news/news')}}/{{@$value['slug']}}"></a>
                                        <a href="{{trans_url('news/news')}}/{{@$value['slug']}}" class=" waves-effect w-md waves-light">Read More</a>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>

                     @empty
                    @endif

                    
                </div>
            </div>
        </section>

                                                

        
    



