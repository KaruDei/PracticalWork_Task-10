<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegRequest;
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
}
