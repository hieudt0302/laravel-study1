@extends('layout')

@section('content')
	<h1>Add a FAQ</h1>
	<form method ="post" action="/faqs/store">
		{{ csrf_field() }}
		Titile<br>
		<textarea name="title"></textarea><br>
		Description<br>
		<textarea name="description"></textarea><br>
		<button type="submit">Save</button>
	</form>
@stop