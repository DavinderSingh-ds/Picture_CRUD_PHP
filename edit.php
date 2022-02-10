<?php
	$id=$_REQUEST['id'];
	include"config.php";
	$q="select * from `gallery` where id ='$id'";
	$r=mysqli_query($con,$q);
	$arr=mysqli_fetch_array($r);
?>
<html>
	<head>
		<title>Picture CRUD</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form method="post" action="update.php" enctype="multipart/form-data">
		<input type="text" hidden  name="id" value="<?php echo $arr['id'];?>">
			<label>Name</label>
			<input type="text" name="N" value="<?php echo $arr['name'];?>">
			<label>Image</label>
			<img src="upload/<?php echo $arr['image'];?>" height="100" width="100">
			<input type="file" name="image">
			<input type="submit" value="save">
		</form>
	</body>
</html>