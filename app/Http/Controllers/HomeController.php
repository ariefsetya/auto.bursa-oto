<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('page.dashboard');
	}
	public function ads_verification()
	{
		return view('page.ads_verification');
	}
	public function ads_approve($id)
	{
		\DB::table('products')->where('id',$id)->update(array('status'=>1));

		return redirect(url('ads/verification'));
	}
	public function ads_decline($id)
	{
		\DB::table('products')->where('id',$id)->update(array('status'=>2));

		return redirect(url('ads/verification'));
	}

}
