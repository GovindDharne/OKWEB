<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dashboard</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-multiselect.css">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>





</head>
<body>

  <form id="formregistration" name="formregistration" method="POST">
    {{csrf_field()}}
  <div class="col-md-12" role="navigation">
<div class="col-md-12">
    <div class="col-md-12 text-center">
        <h2> H Details</h2> <br><br>
    </div>

    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Offer Shortname :</label>
        </div>
        <div class="col-md-7">
            <input id="txthname" name="txthname" type="text" class="text-primary form-control" required="" />
        </div>
    </div>

    <div class="col-md-6">
        <div class="col-md-5">
            <label> Vendor :</label>
        </div>
        <div class="form-group col-md-7">
        <select name="hvid" id="hvid" class="selectpicker select-opt form-control" required="">
           <option value="0">Vendor id</option>
             <option value="1">abc</option>
        </select>
        </div>
    </div>
        
     <div class="col-md-6">
        <div class="col-md-5">
            <label>Branch :</label>
        </div>
        <div class="form-group col-md-7">
        <select name="hbrid" id="hbrid" class="selectpicker select-opt form-control" required="">
           <option value="0">Branch id</option>
             <option value="1">abc</option>
        </select>
        </div>
        </div>

        <div class="col-md-6">
        <div class="col-md-5">
            <label>Category :</label>
        </div>
        <div class="form-group col-md-7">
        <select name="hcatid" id="hcatid" class="selectpicker select-opt form-control" required="">
           <option value="0">Category</option>
             <option value="1">Cloths</option>
        </select>
        </div>
        </div>

    <div class="form-group col-md-6">
      <div class="form-group">
        <div class="col-md-5">
            <label>City :</label>
        </div>
      <div class="col-md-7">
        <select name="hddlcity" id="hddlcity" class="selectpicker select-opt form-control" required="">
          <option value="0">City</option>
          <option value="1">Mumbai</option>
        </select>
      </div>
      </div>
    </div>


    <div class="form-group col-md-6">
      <div class="form-group">
        <div class="col-md-5">
            <label>Start Date:</label>
        </div>
        <div class="col-md-7">
            <input type="date" class="text-primary form-control" name="fdate" id="fdate" required="">
        </div>
      </div>
    </div>


    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>End Date:</label>
        </div>
        <div class="col-md-7">
           <input type="date" name="edate" class="text-primary form-control" id="edate" required="">
        </div>
    </div> 

    

        <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Upload images:</label>
        </div>
        <div class="col-md-7">
           <input type="file" name="fileToUpload" id="fileToUpload" class="text-primary form-control" required="" />
        </div>
    </div>

       <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Link:</label>
        </div>
        <div class="col-md-7">
           <input type="text" class="text-primary form-control" name="htxtlink" id="htxtlink">
        </div>
    </div> 

    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Offer Description :</label>
        </div>
        <div class="col-md-7">
            <textarea id="htxtname" name="htxtname" type="text" class="text-primary form-control" required="" ></textarea>
        </div>
    </div>


    <div class="form-group col-md-12">
      <div class="col-md-4">
       <input type="button" name="hoffsub" id="hoffsub" value="submit" class="btn success">
     </div>
    </div>




<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/templatemo_script.js"></script>
<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>

   <script type="text/javascript">
     
  $(document).ready(function(){
      $('#hoffsub').click(function () {
      alert('test');
  if ($('#formregistration').valid()){
   $.ajax({ 
   url: "{{URL::to('inserthealth')}}",
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

<!-- $('.mall').multiselect({
  includeSelectAllOption: true,
  enableFiltering:true,
  enableCaseInsensitiveFiltering:true
}); -->