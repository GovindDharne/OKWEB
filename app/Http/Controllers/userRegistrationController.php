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

class userRegistrationController extends Controller
{
	public function Registeruser()
	{
		$states=DB::select("call usp_load_states()");
		return view('user-registration',['statelist'=>$states]);
	}

	public function loadcities($stateid)
	{
		$cities=DB::select("call usp_load_cities($stateid)");
		return json_encode($cities);

	}

	public function insertuserdetails(Request $req)
	{
		print_r($req);
		exit();
	}

            public function insertusermaster(Request $req){      
// print_r($req->all());exit();
 
          $demo = DB::statement('call usp_insert_user_details (?,?,?,?,?)',array(
          $req->txtname,
          $req->txtemail,
          $req->txtpassword,
          $req->txtmobile,          
          $req->ddlcity,
    ));

            $states=DB::select("call usp_load_states()");
		return view('user-registration',['statelist'=>$states]);
            }

}



?>