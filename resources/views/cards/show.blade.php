@extends('layout')


@section('content')
	@if (session()->has('status'))
	<br>
	{{ session()->get('status') }}
	<br>
	@endif
	<h1>{{$card->title}}</h1>
	<ul>
		@foreach ($card->notes as $note)
		<li>
			{{$note->body}}
			<a href="#" style="float:right">{{$note->user->user_name}}<a>
		</li>
		@endforeach
	</ul>
	<br>
	<hr>
	<h2>Add a new note</h2>
	<form method ="post" action="/cards/{{$card->id}}/notes">
		{{ csrf_field() }}
		<textarea name="body">{{ old('body') }}</textarea>
		<button type="submit">Add note </button>
	</form>

	{{var_dump($errors)}}<br>
	@if (count($errors))
		<ul>
			@foreach ($errors->all() as $error )
			<li>
				{{$error}}
			</li>
			@endforeach
		</ul>
	@endif

<!-- 	{!! Form::open(array('url' => '/cards/{{$card->id}}/notes', 'method' => 'post')) !!}
		{{ csrf_field() }}
		<textarea name="body"></textarea>
		<button type="submit">Add note </button>
	{!! Form::close() !!} -->
@stop