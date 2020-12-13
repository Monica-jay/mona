<?php
include_once 'config.php';
$result = mysqli_query($conn,"SELECT * FROM cars");
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Sell Your Car</title>
    <!-- ============ Add custom CSS here ============ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style1.css" rel="stylesheet" type="text/css" />    
</head>
<body>
	<div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
		   <h1 class="mt-4">Display List Of All Saved Information</h1>
              <br>
			  <?php
			  $count=1;
if (mysqli_num_rows($result) > 0) {
?>
              <table class="table table-colored">
                <thead>
                  <tr>
				    <th>S.No</th>
                    <th>Seller Name</th>
                    <th>Address</th>
                    <th>City</th>
					<th>Phone Number</th>
                    <th>Email Address</th>
                    <th>Vehicle Make</th>
                    <th>Model</th>
					<th>Year</th>
					<th>Kilometre Driven</th>
                  </tr>
                </thead>
                <tbody>
				<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
                  <tr>
				  <tr><td align="center"><?php echo $count++; ?></td>
				    
                    <td><?php echo $row["seller_name"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["city"]; ?></td>
                    <td><?php echo $row["mobile"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["vehicle_make"]; ?></td>
                    <td><?php echo $row["model"]; ?></td>
                    <td><?php echo $row["year"]; ?></td>
					<td><?php echo $row["kilometer_driven"]; ?></td>
                  </tr>
                 <?php
$i++;
}
?>
                </tbody>
              </table>
			   <?php
}
else{
    echo "No result found";
}
?>
			  <a  href="index.php" type="button" class="btn btn-warning">Back to Home</a>
        </div>
        
		</div>
    </div>
</div>
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