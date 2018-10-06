<div class="sidebar">
    <div class="widget">
     <!--    <a href="{{trans_url('blog/create')}}" class="btn btn-primary">{{trans('app.create')}} Blog</a> -->
    </div>

    <div class="widget category">
        <h3 class="border-bottom">Category</h3>
        <ul class="mt-20">
            @forelse(News::selectCategories() as $key => $category)
            
               
                <li class="menu-title uppercase"><a href="{{trans_url('news/category')}}/{{@$key}}"><i style="color: #4BCC88;" class="fa fa-circle-o"></i> {!!@$category!!}</a></li>
            @empty
            @endif   
        </ul>
        
    </div>
    <div class="widget tags">
    <h3>Tag</h3>
    <ul class="mt-20">
        @forelse(News::selectTags() as $key => $tag)
            
               
                <li><a href="{{trans_url('news/tag')}}/{{@$tag}}">{!!@$tag!!}</a></li>
            @empty
            @endif 
    </ul>
    </div>
</div>
