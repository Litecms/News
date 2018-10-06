            <div class='row'>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::select('category_id')
                       ->options(News::selectadminCategories())
                       -> label(trans('news::news.label.category_id'))
                       -> placeholder(trans('news::news.placeholder.category_id'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('title')
                       -> label(trans('news::news.label.title'))
                       -> placeholder(trans('news::news.placeholder.title'))!!}
                </div>

                

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('tag')
                       -> label(trans('news::news.label.tags'))
                       -> placeholder(trans('news::news.placeholder.tags'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                  {!! Form::select('published')
                  -> options(trans('news::news.options.published'))
                   -> label(trans('news::news.label.published'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                  {!! Form::select('status')
                  -> options(trans('news::news.options.status'))
                   -> label(trans('news::news.label.status'))!!}
                </div>
                
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

                <div class='col-md-12 col-sm-12'>
                       {!! Form::textarea('description')
                       ->addClass('html-editor')
                       -> label(trans('news::news.label.description'))
                       -> placeholder(trans('news::news.placeholder.description'))!!}
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