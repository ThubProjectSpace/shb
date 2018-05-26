<?php 
session_start();
// error_reporting(0);

$con = mysqli_connect("localhost","root","","seminar");

if (!$con) {
	echo "Database not connected";
	exit();
}
?>