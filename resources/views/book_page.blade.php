@extends('layouts.structure')

@section('title') {{$book->title}} @endsection

@section('content')
	<div class="book_container">
		<h1>{{$book->title}}</h1>
		<p>{{$book->text}}</p>
	</div>

@endsection