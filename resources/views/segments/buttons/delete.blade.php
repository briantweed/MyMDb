@if($user!=false && $user->level==1)
   <div class="row">
      <div class="col-xs-12">
         {!! Form::open(['method' => 'DELETE', 'route' => ['movies.destroy', $movie->movie_id]]) !!}
         <button type="submit" class="btn btn-danger-outline btn-lg btn-block" href="javascript:void(0)"><i class="ft icon-delete"></i> delete</a>
         {!! Form::close() !!}
      </div>
   </div>
@endif
