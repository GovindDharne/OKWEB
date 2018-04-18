<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use DB;
 use Response;
 use Validator;
 use Redirect;
 use Session;
 use URL;
 use Mail;

class loginController extends Controller
{
	public function userlogin()
	{
		return view('login');
	}

	public function checklogin(Request $req)
	{
		$login = DB::select('call usp_login(?,?)',array($req->uname,$req->pwd));
		return redirect('offer-dashboard');

	}
}


?>