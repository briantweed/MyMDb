@foreach($options->keywords as $keyword)
   <div class="col-xs-8 col-sm-6 col-md-3 col-lg-3">
      {!! Form::label('tag_'.$keyword->keyword_id, $keyword->word) !!}
   </div>
   <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3 switch round">
      {!! Form::checkbox('tags[]', $keyword->keyword_id, $keyword->selected, ['id' => 'tag_'.$keyword->keyword_id]) !!}
      {!! Form::label('tag_'.$keyword->keyword_id, $keyword->word) !!}
   </div>
@endforeach
