<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "orthodonticdental_db";

$dbc = mysqli_connect($servername,$username,$password,$db);
    
if($dbc){

} else{
	die("dbcnecton failed: ".mysqli_connect_error());
}


?>