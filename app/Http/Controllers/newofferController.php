<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Response;
use Redirect;
use Session;
use URL;
use Mail;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class newofferController extends Controller{
	public function addnewoffer()
	{
		return view('createoffer');
	}

		  public function offerinsert(Request $req){      
 
          $demo = DB::statement('call usp_insertoff (?,?,?,?,?,?,?,?,?,?,?,?,?)',array(
          $req->txtname,
          $req->txtnamed,
          $req->bid,
          $req->vid,
          $req->brid,
          $req->fileToUpload,0,0,$req->ddlmall,0,
          $req->fdate,
          $req->edate,
          $req->txtlink,


    ));
      }
}