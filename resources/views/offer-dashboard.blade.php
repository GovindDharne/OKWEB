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
    <input id="hdnusername" name="hdnusername" value="$login->username" type="text" />
<div class="col-md-12" role="navigation">
  <div class="col-md-12">
    <div class="form-group col-md-12">
      <div class="col-md-13">
          <input type="Submit" id="btnsave" class="btn btn-primary" name="btnsave" value="Submit" />
      </div>
    </div>    
  </div>
</div>
</form>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/templatemo_script.js"></script>
<script type="text/javascript">

$(document).ready(function(){
   

});



  </script>
</body>
</html>