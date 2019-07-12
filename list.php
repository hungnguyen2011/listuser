<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>List User</h1>
	<h3><a href="formsubmit.php">Add</a></h3>
	<table border="1px" cellspacing="0" cellpadding="10">
		<tr>
			<th>Stt</th>
			<th>Username</th>
			<th>Email</th>
			<th>Address</th>
			<th>...</th>
		</tr>
		
		<?php
		include('connect.php');
		 $sql="SELECT * from tbl_user";
		 $query=mysqli_query($conn, $sql);
		 while($row= mysqli_fetch_array($query)){ 

		?>
		<tr>
			<td><?php echo $row["stt"] ?></td>
			<td><?php echo $row["username"] ?></td>
			<td><?php echo $row["email"] ?></td>
			<td><?php echo $row["address"] ?></td>
			<td><a href="update.php?id=<?php echo $row['stt'] ?>">Update</a> / <a href="delete.php?id=<?php echo $row['stt'] ?>">Delete</a></td>
		</tr>
		<?php
		}
		?>
	</table>
	
</body>
</html>