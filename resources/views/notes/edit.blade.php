@extends('layout')

@section('content')
	<h1>Edit note</h1>
	<form method ="post" action="/note/{{$note->id}}">
		{{ csrf_field() }}
		{{method_field('PATCH')}}
		<textarea name="body">{{$note->body}}</textarea>
		<button type="submit">Update note </button>
	</form>
@stop