@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
				<div><a class="highlight" href="/cards">BACK TO CARDS</a></div>
				<div>
						<h1>{{ $card->title }}</h1>
						<ul class="list-group">
								@if (count($card->notes))
										@foreach ($card->notes as $note)
												<li class="list-group-item">
														<a href="/notes/{{ $note->id }}/edit">{{ $note->body }}</a>
														<div class="float-right">
																<a href="#">{{ $note->user->username }}</a>
																<span>&nbsp;|&nbsp;</span>
																<a class="highlight-red float-right" href="/notes/{{ $note->id }}/delete">DELETE</a>
														</div>
												</li>
										@endforeach
								@else
										<li>No notes associated with this card.</li>
								@endif
						</ul>
				</div>
		<!-- <div><a href="cards/{{ $card->id }}">{{ $card->title }}</a></div> -->
				<hr>
				<h3>Add a new note</h3>
				<form method="POST" action="/cards/{{ $card->id }}/notes">
						{{ csrf_field() }}
						<div class="form-group">
								<textarea name="body" class="form-control"></textarea>		
						</div>
						<div class="form-group">
								<select name="user_id">
										<option>--Select User--</option>
										@foreach ($users as $userId => $username)
								  			<option value="{{ $userId }}">{{ $username }}</option>
								  	@endforeach
								</select>
						</div>
						<div class="form-group">
								<button type="submit" class="btn btn-primary">Add Note</button>		
						</div>						
				</form>
		</div>
	</div>
@stop