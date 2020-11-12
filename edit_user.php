<?php 
$con = new mysqli("localhost","root","","db_stors");
$username = $_POST['username'];
$password = $_POST['password'];
$mobile   = $_POST['mobile'];
$user_id  = $_POST['user_id'];
$status = $con->query("UPDATE `tbl_data` SET `username` = '$username',`password` = '$password',`mobile` = '$mobile' WHERE id = '$user_id'");

if($status==1){
	header('Location:view.php');
}else{
	echo"<h2>Data Not Update Sucessfully</h2>";
}
?>