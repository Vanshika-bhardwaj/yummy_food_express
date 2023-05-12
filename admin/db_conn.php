<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "tbl_admin";

$conn = mysqli_connect($sname, $username, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
