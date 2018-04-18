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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js" ></script> 
</head>
<body>

  <form id="formregistration" name="formregistration" method="POST">
    {{csrf_field()}}
  <div class="col-md-12" role="navigation">
<div class="col-md-12">
    <div class="col-md-12 text-center">
        <h2>Login</h2>
    </div>

    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Username :</label>
        </div>
        <div class="col-md-7">
            <input id="txtuname" name="txtuname" type="text" class="text-primary form-control" required="" placeholder="Email or Mobile Number" />
        </div>
    </div>


    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Password :</label>
        </div>
        <div class="col-md-7">
            <input id="txtpwd" name="txtpwd" type="text" class="text-primary form-control" required="" placeholder="Password" />
        </div>
    </div>

    
    <div class="form-group col-md-12">
        <div class="col-md-13">
<input id="btnlogin" class="btn btn-primary" name="btnlogin" value="Login" />
        </div>
    </div>
    

  </div>
</div>
</form>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/templatemo_script.js"></script>
<script type="text/javascript">

$(document).ready(function(){
   
$('#btnlogin').click(function () {

console.log($('#formregistration').serialize());
  
  if ($('#formregistration').valid()){
   $.ajax({ 
   url: "{{URL::to('checklogin')}}",
   method:"POST",
   data: $('#formregistration').serialize(),
   success: function(msg)  
   {
    alert(msg);
   }

});
 }

});
});



  </script>
</body>
</html>