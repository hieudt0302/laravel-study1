@extends('layout')

@section('content')
	<h1>Edit FAQ</h1>
	<form method ="post" action="/faq/{{$faq->id}}">
		{{ csrf_field() }}
		{{method_field('PATCH')}}
		Title<br>
		<textarea name="title">{{$faq->title}}</textarea><br>
		Description<br>
		<textarea name="description">{{$faq->description}}</textarea><br>
		<button type="submit">Update</button>
	</form>
@stop