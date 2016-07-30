@extends('layout')


@section('content')
	<h1>All FAQs</h1>
	@foreach ($faqs as $faq)
		<div>
			<hr>
			Q: {{$faq->title}} <br>
			A: {{$faq->description}}<br>
			<a href = "/faqs/{{$faq->id}}/edit"> Edit </a>
			<a href = "/faqs/{{$faq->id}}/delete"> Delete </a>
		</div>
	@endforeach
	<div>
		<a href="faqs/add">Add a FAQ</a>
	</div>
@stop