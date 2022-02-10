<?php
	$id= $_REQUEST['id'];
	include "config.php";
	$q="delete from `gallery` where id ='$id'";
	$result = mysqli_query($con,$q);
	if($result>0)
	{
		header("location:select.php");
	}
	else
	{
		echo "not deleted";
	}
?>