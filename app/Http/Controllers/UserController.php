<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\BookRequest;
use App\Http\Requests\RegRequest;
use App\Models\Books;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	public function Auth(AuthRequest $req) {
		$email = $req -> input('email');
		$password = $req -> input('password');

		$user = User::where('email', $email) -> first();

		if ($user && Hash::check($password, $user -> password)) {
			
			$credentials = $req->only('email', 'password');

			if (Auth::attempt($credentials)) {
				return redirect()->intended( route('home') );
			} else {
				return redirect() -> route('auth') -> with('error', 'Incorrect data');
			}

		} else {
			return redirect() -> route('auth') -> with('error', 'Incorrect data');
		}
	}

	public function Reg(RegRequest $req) {
		$user = new User();
		$user -> surname = $req -> input('surname');
		$user -> name = $req -> input('name');
		$user -> l_name = $req -> input('l_name');
		$user -> email = $req -> input('email');
		$user -> password = $req -> input('password');

		$user -> save();

		return redirect() -> route('home');
	}

	public function logout() {
		Auth::logout();
		return redirect() -> route('home');
	}

	/* library */
	public function add_book(BookRequest $req) {
		$book = new Books();
		$book -> user_id = $req -> input('user_id');
		$book -> title = $req -> input('title');
		$book -> text = $req -> input('text');

		$book -> save();

		return redirect() -> route('library');
	}

	public function delete_book($id) {
		Books::find($id) -> delete();
		return redirect() -> route('library');
	}

	

	public function out_library() {
		$user = Auth::user();
		$user_books = Books::all() -> where('user_id', '==', $user->id);
		return view('library', ['user' => $user, 'user_books' => $user_books]);
	}

	public function out_book($id) {
		$book = Books::find($id);
		return view('book_page', ['book' => $book]);
	}

	public function profile($id) {
		$profile_user = User::find($id);
		return view('profile', ['profile_user' => $profile_user]);
	}
}