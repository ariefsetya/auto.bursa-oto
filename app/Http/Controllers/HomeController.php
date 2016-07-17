<?php namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Input;

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
		return view('page.dashboard')->with(array('dashboard'=>'active'));
	}
	public function ads_verification()
	{
		return view('page.ads_verification')->with(array('ads_verification'=>'active'));
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
	public function web_config()
	{
		return view('page.web_config')->with(array('web_config'=>'active'));
	}
	public function web_config_edit($id)
	{
		return view('page.web_config_edit')->with(array('web_config'=>'active',
				'data'=>\DB::table('appconfigs')->where('id',$id)->first()));
	}
	public function web_config_update($id)
	{
		$a = Input::all();
		unset($a['_token']);
		\DB::table('appconfigs')->where('id',$id)->update($a);

		return redirect(url('web/config'));
	}

}
