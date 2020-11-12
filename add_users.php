<?php
$con = new mysqli("localhost","root","","db_stors");

$username = $_POST['username'];
$password = $_POST['password'];
$mobile   = $_POST['mobile'];

$status = $con->query("INSERT INTO `tbl_data` (`username`, `password`, `mobile`) VALUES ('$username', '$password', '$mobile')");
if($status){
	//echo"<h2>Data Sucessfully Insert</h2>";
	header('Location:view.php');
}
?>