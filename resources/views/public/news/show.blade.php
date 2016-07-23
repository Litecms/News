<section class="blog-detail-wraper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <h1 class="inner-title">
                    <span>
                        {{@$news['title']}}
                    </span>
                </h1>
                <div class="blog-detail-main-slider">

                        @foreach($news->getImages('news.xl', 'images') as $image)
                            <img  src="{!!url($image)!!}" alt="" class=" img-responsive">
                        @endforeach


                        </img>
                    </img>
                </div>
                <div class="blog-detail-desc">
                    <?php
                        $timestamp = strtotime($news['published_on']);
                        $day = date('D', $timestamp);
                    ?>
                    <p class="detail-tags m-b-20">
                        <i class="ion ion-android-person">
                        </i>
                        {{@$news->user['name']}} on {{$day}} , {{@$news['published_on']}}
                    </p>
                    <p class="blog-detail-para">
                        {!!$news['description']!!}
                    </p>
                </div>

            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="blog-detail-side-search-wraper">
                    {!!Form::open()->method('GET')
                         ->action(URL::to('news'))!!}
                            {!!Form::text('search')->type('text')->class('form-control')->placeholder('Search News')->raw()!!}
                    <i class="icon-magnifier">
                    </i>
                    {!! Form::close()!!}
                </div>

                {!!News::latest()!!}

            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function() {
            $(".blog-detail-main-slider").owlCarousel({
                margin: 0,
                dots: false,
                nav: true,
                navText: ['<i class="ion ion-ios-arrow-left"></i>','<i class="ion ion-ios-arrow-right"></i>'],
                responsive:{
                    0:{
                        items:1
                    }
                }
            });
    });
</script>