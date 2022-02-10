<html>
	<head>
		<title>Picture Table</title>
		<meta charset="utf-8">
	</head>
	<body>
	<?php
		if(isset($_REQUEST['x']))
		{
			$x = $_REQUEST['x'];
			if($x==1)
			{
				echo "<h1>Data Updated successfully</h1>";
			}
			else if($x==0)
			{
				echo "<h1>Data not Updated</h1>";
			}
			else if($x==2)
			{
				echo "<h1>Data Deleted</h1>";
			}
			else
			{
				echo "<h1>Data not Deleted</h1>";
			}
		}
	?>	
		<table border="2">
			<tr>
				<th>Name</th>
				<th>Image</th>
				<th>Delete</th>
				<th>Edit</th>
			</tr>
			<?php
				include "config.php";
				$q="select * from `gallery`";
				$r=mysqli_query($con,$q);
				while($arr=mysqli_fetch_array($r)){
			?>
			<tr>
				<td><?php echo $arr['name'];?></td>
				<td><img src="upload/<?php echo $arr['image'];?>" height="100" width="100"></td>
				<td><a href="delete.php?id=<?php echo $arr['id'];?>">Delete</a></td>
				<td><a href="edit.php?id=<?php echo $arr['id'];?>">Edit</a></td>
			</tr>
			<?php }?>
		</table>
	</body>
</html>