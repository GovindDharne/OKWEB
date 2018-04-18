<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dashboard, Free HTML5 Admin Template</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>

</head>
<body>

  <form id="formregistration" name="formregistration" method="POST">
    {{csrf_field()}}
  <div class="col-md-12" role="navigation">
<div class="col-md-12">
    <div class="col-md-12 text-center">
        <h2> Details</h2> <br><br>
    </div>

    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Offer Shortname :</label>
        </div>
        <div class="col-md-7">
            <input id="txtname" name="txtname" type="text" class="text-primary form-control" required="" />
        </div>
    </div>
    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Offer Description :</label>
        </div>
        <div class="col-md-7">
            <textarea id="txtname" name="txtnamed" type="text" class="text-primary form-control" required="" ></textarea>
        </div>
    </div>

<div class="col-md-4 col-xs-10">
        <div class="form-group col-md-7">
        <select name="bid" id="bid" class="selectpicker select-opt form-control" required="">
           <option value="0">Brand id</option>
             <option value="1">abc</option>
        </select>
        </div>
        </div>
        <div class="col-md-4 col-xs-10">
        <div class="form-group col-md-7">
        <select name="vid" id="vid" class="selectpicker select-opt form-control" required="">
           <option value="0">Vendorid</option>
             <option value="1">abc</option>
        </select>
        </div>
        </div>
        <div class="col-md-4 col-xs-10">
        <div class="form-group col-md-7">
        <select name="brid" id="brid" class="selectpicker select-opt form-control" required="">
           <option value="0">Branch id</option>
             <option value="1">abc</option>
        </select>
        </div>
        </div>  <br>
        <div class="form-group col-md-4">
        <div class="col-md-5">
            <label>Upload images:</label>
        </div>
        <div class="col-md-7">
           <input type="file" name="fileToUpload" id="fileToUpload" class="text-primary form-control" required="" />
        </div>
    </div>

    <div class="form-group col-md-3">
        <div class="col-md-5">
            <label>From Date:</label>
        </div>
        <div class="col-md-7">
            <input type="date" name="fdate" id="fdate">
        </div>
    </div>
    <div class="form-group col-md-3">
        <div class="col-md-5">
            <label>End Date:</label>
        </div>
        <div class="col-md-7">
           <input type="date" name="edate" id="edate">
        </div>
    </div> 

    <div class="form-group col-md-3">
        <div class="col-md-5">
            <label>Mall:</label>
        </div>
        <div class="col-md-7">
           <input type="text" name="ddlmall" id="ddlmall">
        </div>
    </div> 

       <div class="form-group col-md-3">
        <div class="col-md-5">
            <label>Link:</label>
        </div>
        <div class="col-md-7">
           <input type="text" name="txtlink" id="txtlink">
        </div>
    </div> 

    <div class="form-group col-md-6">
      <div class="col-md-7">
       <input type="button" name="offsub" id="offsub" value="submit" class="btn success">
     </div>
    </div>




<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/templatemo_script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>



    <script type="text/javascript">
$(document).ready(function(){
     
      $('#offsub').click(function () {

  if ($('#formregistration').valid()){
   $.ajax({ 
   url: "{{URL::to('insertoffer')}}",
   method:"POST",
   data: $('#formregistration').serialize(),
   success: function(msg)  
   {
    
   }

});
 }

    });
  });
    </script>

