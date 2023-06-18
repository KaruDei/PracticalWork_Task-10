@extends('layouts.structure')

@section('title') Update Book @endsection

@section('content')
	 
<h1>Update Book:</h1>
<form action="{{ route('update_book_form', $id) }}" method="POST" class="add_book_form">
	@csrf
	<label for="title" class="add_book_form_label"><p>Title:</p>
		<input type="text" class="add_book_form_input" name="title" id="title" >
	</label>
	<label for="title" class="add_book_form_label"><p>Text:</p>
		<textarea name="text" class="add_book_form_textarea" id="text"></textarea>
	</label>
	<input type="submit" name="add_book_form_sub" class="add_book_form_sub" value="ADD">
</form>

@endsection