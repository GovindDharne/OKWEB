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


class HealthofferController extends Controller{

	public function offerhelth (){

		return view ('health_offers');

  }

   public function healthofferinsert(Request $req){      

          $demo = DB::select('call usp_insert_helth_off(?,?,?,?,?,?,?,?,?)',array(
          $req->txthname,
          $req->htxtname,
          $req->hvid,
          $req->hbrid,
          $req->fileToUpload,
          $req->hddlcity,
          $req->txtlink,          
          $req->fdate,
          $req->edate

    ));
      }


}


?>