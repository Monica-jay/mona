<?php
include_once 'config.php';

if(isset($_POST['submit']))
{	 
		
	$seller_name = $_POST['seller_name'];
	 $address = $_POST['address'];
	 $city = $_POST['city'];
	 $mobile = $_POST['mobile'];
	 $email = $_POST['email'];
	 $vehicle_make = $_POST['vehicle_make'];
	 $model = $_POST['model'];
	 $year = $_POST['year'];
	  $kilometer_driven = $_POST['kilometer_driven'];
	 $sql = "INSERT INTO cars (seller_name,address,city,mobile,email,vehicle_make,model,year,kilometer_driven)
	 VALUES ('$seller_name','$address','$city','$mobile','$email','$vehicle_make','$model','$year','$kilometer_driven')";
	 if (mysqli_query($conn, $sql)) {
		echo '<div class="alert alert-success " role="alert">New record successfully Insert!</div>' ; 
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);


}


?>

<html>
<head>
    <meta charset="utf-8">
    <title>Sell Your Car</title>
    <!-- ============ Add custom CSS here ============ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style1.css" rel="stylesheet" type="text/css" />   
     
<script type="text/javascript">
 function carlink() {
  var vl = document.getElementById('vehicle_make').value;
   var md = document.getElementById('model').value;
    var yr = document.getElementById('year').value;
  document.getElementById('carsid').value = 'https://www.jdpower.com/cars/' + vl+'/' +md+'/'+yr;
}

carlink();
</script>

</head>
<body>

	<div class="container">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
		   <h1><strong>Sell Your Car For Free</strong></h1>
		   <img src="img/car.png" class="img-responsive">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
            <div class="registrationform">
				<form name="myForm" class="form-horizontal" method="post" action=""  onsubmit="return validateForm()">
					<fieldset>
						<legend>Fill Your Details <i class="fa fa-pencil pull-right"></i></legend>
						<div class="form-group">
							<label class="col-lg-3 control-label">Seller Name</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" id="" name="seller_name" placeholder="Enter Seller Name" >                   
							</div>
						</div>
						<div class="form-group">
                        <label class="col-lg-3 control-label">Address</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" id="" name="address" placeholder="Enter Address" >                   
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">City</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" id=""   name="city" placeholder="Enter City" >                   
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Phone number</label>
								<div class="col-lg-9">
									<input type="tel" class="form-control" id=""  name="mobile" placeholder="Enter Phone Number" >
								</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-3 control-label">Email Address</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" id=""  name="email" placeholder="Enter Email Address" >                   
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Vehicle Make</label>
							<div class="col-lg-9">
								<input  type="text" class="form-control" id="vehicle_make"  onchange="carlink()" name="vehicle_make" placeholder="Enter Car Brand" >                   
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label"> Model</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" id="model" onchange="carlink()"  name="model" placeholder="Enter Car Model" >                   
							</div>
						</div>
						<div class="form-group">
							<label  class="col-lg-3 control-label">Year</label>
							<div class="col-lg-9">
								<input type="tel" class="form-control" onchange="carlink()" id="year"  name="year" placeholder="Enter Year 2000"  >
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Kilometer Driven</label>
							<div class="col-lg-9">
								<input type="tel" class="form-control"  name="kilometer_driven" placeholder="Enter Kilometre" >
							</div>
						</div>
						<div style="text-align:right; font-size:20px" >
						
						  
						  <a href = "javascript:;" id="carsid" target="_blank" onclick = "this.href= document.getElementById('carsid').value">search for car</a>
</div>
						<div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-warning" name="submit">Submit</button>
                            <a href="page2.php" type="submit" class="btn searchbtn" style="background-color:#ff0000;">Search</a>
                        </div>
                    </div>
                </fieldset>
            </form>
		</div>
    </div>
</div>
<script src="js/validation.js" type="text/javascript"></script>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.backstretch.js" type="text/javascript"></script>
<script type="text/javascript">
    'use strict';

            /* ========================== */
            /* ::::::: Backstrech ::::::: */
            /* ========================== */
            // You may also attach Backstretch to a block-level element
            $.backstretch(
        [
            "img/44.jpg",
            "img/colorful.jpg",
            "img/34.jpg",
            "img/images.jpg"
        ],

        {
            duration: 4500,
            fade: 1500
        }
    );
</script>
</body>
</html>