<?php
	$id = $_REQUEST['id'];
	$name = $_REQUEST['N'];
	$fn = $_FILES['I']['name'];
	$ft = $_FILES['I']['tmp_name'];
	
	include "config.php";
	
	$q="update `gallery` set name='$name',image='$fn' where id='$id'";
	
	$r=mysqli_query($con,$q);
	if($r>0)
	{
		move_uploaded_file($ft,"upload/".$fn);
		//echo "updated";
		echo "<script>window.location.assign('select.php?x=1')</script>";
	}
	else
		echo "<script>window.location.assign('select.php?x=0')</script>";
?>