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

  <form id="formregistration" name="formregistration" action="{{'insertregisteruser'}}" method="POST">
    {{csrf_field()}}
  <div class="col-md-12" role="navigation">
<div class="col-md-12">
    <div class="col-md-12 text-center">
        <h2>User Details</h2>
    </div>

    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Name :</label>
        </div>
        <div class="col-md-7">
            <input id="txtname" name="txtname" type="text" class="text-primary form-control" required="" />
        </div>
    </div>


    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Email :</label>
        </div>
        <div class="col-md-7">
            <input id="txtemail" name="txtemail" type="text" class="text-primary form-control" required="" />
        </div>
    </div>

    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Mobile :</label>
        </div>
        <div class="col-md-7">
            <input id="txtmobile" name="txtmobile" type="text" class="text-primary form-control" required="" />
        </div>
    </div>

    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Password :</label>
        </div>
        <div class="col-md-7">
            <input id="txtpassword" name="txtpassword" type="text" class="text-primary form-control" required="" />
        </div>
    </div>

    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>Confirm Password :</label>
        </div>
        <div class="col-md-7">
            <input id="txtcpassword" name="txtcpassword" type="text" class="text-primary form-control" required="" />
        </div>
    </div>

    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>State :</label>
        </div>
        <div class="col-md-7">
            <select id="ddlstate" name="ddlstate" type="text" class="text-primary form-control">
             @foreach($statelist as $val)
              <option value="{{$val->id}}">{{$val->state_name}}</option>                 
             @endforeach
            </select>
        </div>
    </div>

    <div class="form-group col-md-6">
        <div class="col-md-5">
            <label>City :</label>
        </div>
        <div class="col-md-7">
            <select id="ddlcity" name="ddlcity" type="text" class="text-primary form-control">
              <option value="0">--Select City--</option>
            </select>
        </div>
    </div>

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
    
$('#ddlstate').change(function(){

      var state_id = $(this).val();
            
                $.ajax({
                    url: 'getcities/'+state_id,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
console.log(data);
                        $('#ddlcity').empty();
                        $('#ddlcity').append('<option value="0">--Select City--</option>');
                          for(var i=0;i < data.length;i++){

                            $('#ddlcity').append('<option value="'+ data[i].id +'">'+ data[i].cityname +'</option>');
              }
                     }
                });
           
  
});

$('#btnsave').click(function () {
  
  if ($('#formregistration').valid()){
   $.ajax({ 
   url: "{{URL::to('Fsm-Register')}}",
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
</body>
</html>