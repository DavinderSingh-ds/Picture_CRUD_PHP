<?php
//get values
$name = $_REQUEST['N'];
$fn = $_FILES['I']['name'];
$ft = $_FILES['I']['tmp_name'];

include "config.php";

// table query
$query = "insert into `gallery`(`name`,`image`)values('$name','$fn')";

//Result
$result = mysqli_query($con,$query);

if($result>0)
	{
		echo "data inserted";
		move_uploaded_file($ft,"upload/".$fn);
	}
	else{
		echo "not inserted<br>";
		echo mysqli_error($con);
	}
?>


