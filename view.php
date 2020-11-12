<?php
$con = new mysqli("localhost","root","","db_stors");
$query = $con->query("SELECT * FROM tbl_data");
?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<title>Data view</title>
	</head>
	<body>
		<form action="" method="">
			<table border="1px solid bold">
				<tr>
					<td><strong style="color:green;">USERNAME</strong></td>
					<td><strong>PASSWORD</strong></td>
					<td><strong>MOBILE</strong></td>
					<td><strong>EDIT</strong></td>
					<td><strong style="color:red;">DELETE</strong></td>
				</tr>
				<?php while($row = $query->fetch_assoc()){?>
				<tr>
					<td><?php echo $row['username'];?></td>
					<td><?php echo $row['password'];?></td>
					<td><?php echo $row['mobile'];?></td>
					<td><a href = "edit.php?user_id=<?php echo $row['id'];?>">EDIT</a></td>
					<td><a href = "delete.php?user_id=<?php echo $row['id'];?>">DELETE</a></td>
				</tr>
				<?php } ?>
			</table>
		</form>
	</body>
</html>