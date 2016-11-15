@extends('layout')

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
				<div><a class="highlight" href="/cards">BACK TO CARDS</a></div>
				<hr>
				@php
						$addEditText = 'Add';
						$title = '';
						$action = "/card/store";
				@endphp
				@unless (empty($card))
						@php
								$addEditText = 'Update';
								$title = $card->title;
								$action = "/card/" . $card->id;
						@endphp
				@endunless
				<h3>{{ $addEditText }} Card</h3>
				<form method="POST" action="{{ $action }}">
						{{ csrf_field() }}
						@unless (empty($title))
						{{ method_field('PATCH') }}
								<input name="id" class="form-control" type="hidden" value="{{ $card->id }}">
						@endunless
						<div class="form-group">
								<input name="title" class="form-control" type="text" value="{{ $title }}">
						</div>
						<div class="form-group">
								<button type="submit" class="btn btn-primary">{{ $addEditText }} Card</button>		
						</div>						
				</form>
		</div>
	</div>
@stop