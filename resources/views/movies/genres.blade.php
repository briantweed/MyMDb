<div id="genre-list">
   @foreach($options->genres as $genre)
      <div class="col-xs-8 col-sm-6 col-md-3 col-lg-3">
         {!! Form::label('genre_'.$genre->genre_id, $genre->type) !!}
      </div>
      <div class="col-xs-4 col-sm-6 col-md-3 col-lg-3 switch round">
         {!! Form::checkbox('genres[]', $genre->genre_id, $genre->selected, ['id' => 'genre_'.$genre->genre_id]) !!}
         {!! Form::label('genre_'.$genre->genre_id, $genre->type) !!}
      </div>
   @endforeach
</div>
