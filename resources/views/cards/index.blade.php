@extends('layout')

@section('content')
	<h1>All Cards</h1>
	<div>
		@foreach ($cards as $card)
			<div><a href="/cards/{{ $card->id }}">{{ $card->title }}</a></div>
			<!-- <div><a href="{{ $card->path() }}">{{ $card->title }}</a></div> -->
		@endforeach
	</div>
@stop