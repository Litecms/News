    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="news">
            <div class='row'>

              <div class='col-md-12 col-sm-6'>
                       {!! Form::text('title')
                       -> label(trans('news::news.label.title'))
                       -> placeholder(trans('news::news.placeholder.title'))!!}
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::select('category_id')
                       ->options(News::selectadminCategories())
                       -> label(trans('news::news.label.category_id'))
                       -> placeholder(trans('news::news.placeholder.category_id'))!!}
                </div>

                
                
                <div class='col-md-8 col-sm-6'>
                       {!! Form::text('tag')
                       -> label(trans('news::news.label.tags'))
                       -> placeholder(trans('news::news.placeholder.tags'))!!}
                </div>

                
                <div class='col-md-12 col-sm-12'>
                       {!! Form::textarea('description')
                       ->addClass('html-editor')
                       -> label(trans('news::news.label.description'))
                       -> placeholder(trans('news::news.placeholder.description'))!!}
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="image">
            <div class='row'>
                <div class="col-md-6">
                    <div class='col-md-12 col-sm-6'>
                           {!! Form::text('meta_title')
                           -> label(trans('blog::blog.label.meta_title'))
                           -> placeholder(trans('blog::blog.placeholder.meta_title'))!!}
                    </div>
                    <div class='col-md-12 col-sm-6'>
                           {!! Form::textarea('meta_description')
                           -> label(trans('blog::blog.label.meta_description'))
                           -> placeholder(trans('blog::blog.placeholder.meta_description'))!!}
                    </div>
                    <div class='col-md-12 col-sm-6'>
                           {!! Form::text('meta_keyword')
                           -> label(trans('blog::blog.label.meta_keyword'))
                           -> placeholder(trans('blog::blog.placeholder.meta_keyword'))!!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class='col-md-12 col-sm-12'>
                        <div class="form-group">
                            <label for="images" class="control-label col-lg-12 col-sm-12 text-left">
                             {{trans('news::news.label.images') }}
                             </label>
                            <div class='col-lg-12 col-sm-12'>
                                {!! $news->files('images', 10)
                                ->mime(config('filer.image_extensions'))
                                ->url($news->getUploadUrl('images'))
                                ->dropzone()!!}
                            </div>
                            <div class='col-lg-7 col-sm-12'>
                                {!! $news->files('images')
                                 ->editor()!!}
                            </div>
                        </div>
                    </div>                
                </div>
          </div>
        </div>
  </div>
<script>
  $( document ).ready(function() { 
    $('#tag').selectize({
        delimiter: ',',
        persist: false,
        valueField: 'tag',
        labelField: 'tag',
        searchField: 'tag',
        options: tags,
        create: function(input) {
            return {
                tag: input
            }
        }
    });
});
</script>
<script>
var tags = [
@forelse(News::selectTags() as $key => $tag)

    {tag: "{{$tag}}" },
    @empty
    @endif 
];
</script>