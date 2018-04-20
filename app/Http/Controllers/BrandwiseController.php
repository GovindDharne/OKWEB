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


class BrandwiseController extends Controller{


public function allbrand(Request $req){

	 return view('Brandwise_offer');
	}





  public function brandwiseinsert(Request $req){   
  // print_r($req->all());exit();

          $demo = DB::select('call usp_insert_brand_off(?,?,?,?,?,?,?,?,?)',array(
          $req->txthname,
          $req->htxtname,
          $req->hvid,
          $req->hbrid,
          $req->fileToUpload,
          $req->hddlcity,
          $req->htxtlink,          
          $req->fdate,
          $req->edate,     

    ));

          // return redirect('Brandwise_offer');
      }
}











?>