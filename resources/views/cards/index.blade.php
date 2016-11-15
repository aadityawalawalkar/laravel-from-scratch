@extends('layout')

@section('content')
	<div class="row">
			<div class="col-md-6 col-md-offset-3">
					<div><a class="highlight" href="/card/add">ADD NEW CARD</a></div>
					<hr>
					<div>
							<h1>All Cards</h1>
							<ul class="list-group">
								@foreach ($cards as $card)
										<li  class="list-group-item">
												<a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
												<div  class="float-right">
														<a class="highlight-red" href="/card/{{ $card->id }}/edit">UPDATE</a>
														<span>&nbsp;|&nbsp;</span>
														<a class="highlight-red" href="/card/{{ $card->id }}/delete">DELETE</a>
												</div>
										</li>
									<!-- <div><a href="{{ $card->path() }}">{{ $card->title }}</a></div> -->
								@endforeach
							</ul>
					</div>
  		</div>
	</div>
@stop