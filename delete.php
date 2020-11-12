<?php
$con = new mysqli("localhost","root","","db_stors");
$id = $_GET['user_id'];
$query = $con->query("DELETE FROM tbl_data WHERE id = '$id'");
if($query){
header('Location:view.php');	
}else{
	echo"<h2>Data Not Sucessfull</h2>";
}
?>