<?php
	include "config.php";
	$q="delete from `students`";
	$r= mysqli_query($con,$q);
	if($r>0)
	{
		//header("location:select.php");
		echo "<script>window.location.assign('select.php')</script>";
	}
	else{
		echo "not deleted";
	}
?>