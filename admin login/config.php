<?php 
session_start();
// error_reporting(0);

$con = mysqli_connect("localhost","root","","seminar");

if (!$con) {
	echo "Database not connected";
	exit();
}
else{
	$page = basename($_SERVER['PHP_SELF']);
	if ($page=="index.php") {
		if (@$_SESSION['user_id']!="") {
			echo "<script>location.href='home.php'</script>";
		}
	}
	else{
		if (@$_SESSION['user_id']=="") {
			header("location:index.php");
		}
	}
}
?>