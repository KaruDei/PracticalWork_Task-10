@extends ('layouts.structure')

@section('title') Library @endsection

@section('content')
	<h1>Add Book:</h1>
	<form action="{{ route('add_book') }}" method="POST" class="add_book_form">
		@csrf
		<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
		<label for="title" class="add_book_form_label"><p>Title:</p>
			<input type="text" class="add_book_form_input" name="title" id="title">
		</label>
		<label for="title" class="add_book_form_label"><p>Text:</p>
			<textarea name="text" class="add_book_form_textarea" id="text"></textarea>
		</label>
		<input type="submit" name="add_book_form_sub" class="add_book_form_sub" value="ADD">
	</form>
	
	<h2 class="library_title">Books:</h2>

	<div class="users_conteiner">
		<h2>User User User</h2>
		<ul class="book_list" >
			@foreach ($user_books as $book)
				<li>
					<div class="book_block">
						<a href="{{ route('library_book', $book->id)}}">
							{{$book->title}}
						</a>
						<div class="book_menu">
							<a href="">Link</a> 
							<a href=" {{ route('update_book', $book->id) }} ">Update</a> 
							<a href=" {{ route('delete_book', $book->id) }} ">Delete</a>
						</div>
					</div>
				</li>
			@endforeach
		</ul>
	</div>
@endsection