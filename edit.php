<?php
$con = new mysqli("localhost","root","","db_stors");
$id = $_GET['user_id'];
$query = $con->query("SELECT * FROM tbl_data WHERE id = '$id'");
$row = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="UTF-8">
		<title>Data view</title>
	</head>
	<body>
		<form action="edit_user.php" method="post">
			<table>
				<tr>
					<td><input type="text" value="<?php echo $row['username'];?>" name="username"></td>
				</tr>
				<tr>
					<td><input type="text" value="<?php echo $row['password'];?>" name="password"></td>
				</tr>
				<tr>
					<td><input type="text" value="<?php echo $row['mobile'];?>" name="mobile"></td>
				</tr>
				<tr>
					<td><input type="hidden" value="<?php echo $row['id'];?>" name="user_id"></td>
				</tr>
				<tr>
					<td><input type="submit" value="SUBMIT"></td>
				</tr>
			</table>
	</body>