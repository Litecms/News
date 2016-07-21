  {!! Form::hidden('upload_folder')!!}
<div class="col-sm-6">
    {!!Form::text('title')
    ->label('Title')
    ->placeholder('Enter the news title')
    ->required()!!}
</div>
<div class="col-sm-6">
     {!! Form::select('status')
     ->required()
    -> options(trans('news::news.options.status'))
    -> label(trans('news::news.label.status'))
    -> placeholder(trans('news::news.placeholder.status'))!!}

</div>
<div class="col-sm-12">
    {!! Form::textarea('description')
        -> addClass('html-editor')
        -> label('Description')!!}
</div>
<div class="col-sm-6 profile-pic">
    <label>Images</label>
      {!! Filer::uploader('images', $news->getUploadURL('images')) !!}
</div>
<div class="col-sm-6 profile-pic">
 <label>Uploaded Images</label>
      {!! Filer::editor('images', $news['images']) !!}
</div>
