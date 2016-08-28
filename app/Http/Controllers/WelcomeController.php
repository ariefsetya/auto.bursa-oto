<?php namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Input;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// public function __construct()
	// {
	// 	$this->middleware('guest');
	// }

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function login()
	{
		$credentials = \App\User::where('email',Input::get('email'))->first();
		if($credentials->password==""){
			if(md5(Input::get('password'))==$credentials->katasandi){
				$credentials->password = bcrypt(Input::get('password'));
				$credentials->katasandi = "";
				$credentials->save();
				Auth::loginUsingId($credentials->id);
				return redirect(url());
			}else{
				return redirect(url('auth/login'));
			}
		}else{
			if (Auth::attempt(['email' => Input::get("email"), 'password' => Input::get("password"), 'role' => 'admin']))
	        {
	            return redirect()->intended(url());
	        }else{
	        	return redirect(url('auth/login'));
	        }
		}
	}

}
