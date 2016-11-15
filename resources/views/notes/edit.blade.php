@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
				<div><a class="highlight" href="/cards">BACK TO CARDS</a></div>
				<hr>
				<h3>Edit Note</h3>
				<form method="POST" action="/notes/{{ $note->id }}">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<div class="form-group">
								<textarea name="body" class="form-control">{{ $note->body }}</textarea>
						</div>
						<div class="form-group">
								<select name="user_id">
										<option>--Select User--</option>
										@foreach ($users as $userId => $username)
												@if ($note->user_id == $userId)
								  					<option selected="selected" value="{{ $userId }}">{{ $username }}</option>
								  			@else
								  					<option value="{{ $userId }}">{{ $username }}</option>
								  			@endif
								  	@endforeach
								</select>
						</div>
						<div class="form-group">
								<button type="submit" class="btn btn-primary">Edit Note</button>		
						</div>						
				</form>
		</div>
	</div>
@stop