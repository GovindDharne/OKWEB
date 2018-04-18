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

class offersdashboardController extends Controller
{
	public function getoffersdashboard()
	{
		return view('offer-dashboard');
	}
}



?>