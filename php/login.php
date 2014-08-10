<?php 
include "DBDATA.php";
include "statusControl.php";
$mysqli = new mysqli(host, user, pwd, db);



	if (mysqli_connect_errno()) {
		die(error(1,"Connect failed ",mysqli_connect_error()));
		
	}

$user = $mysqli->real_escape_string($_POST['username']);
$pwd =	$mysqli->real_escape_string($_POST['password']);
	$query = "SELECT * FROM usuarios WHERE usuario='$user' and password='$pwd'";
	$result = $mysqli->query($query) or die(error(2,'error en al ejecutar el query de usu'));

// GOING THROUGH THE DATA
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			status(1);
			submit($row);
		}
	}
	else {
		status(2);
		submit();
	}
	
// CLOSE CONNECTION
	mysqli_close($mysqli);
	
