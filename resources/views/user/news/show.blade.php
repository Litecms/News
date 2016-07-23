<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
    <h1 class="inner-title">
        {{$news->title}}
    </h1>
    <div class="blog-detail-main-slider">

        @foreach($news['images'] as $val)
        <img alt="" class=" img-responsive" src="{!!url($val->defaultImage('news.lb','images'))!!}">
        @endforeach

    </div>
    <div class="blog-detail-desc">
        <p class="detail-tags m-b-20">
            {{$news->published_on}}
        </p>
        <div class="quotes">
            <p>
                {{$news->description}}
            </p>
        </div>
    </div>
    <div class="blog-tags-wraper m-t-30">
        <p>
            <i class="icon icon-tag">
            </i>
            Travel , Beach , Family
        </p>
    </div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <div class="blog-detail-side-search-wraper">
        {!!Form::open()
        ->method('GET')
        ->action(URL::to('user/news/news'))!!}
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        {!!Form::text('search')->type('text')->class('form-control')->placeholder('Search for...')->raw()!!}
        <i class="icon-magnifier"></i>
        {!! Form::close()!!}
    </div>
    {!!News::latest(3)!!}
</div>
