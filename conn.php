<?php
	$server='Localhost';
	$user='root';
	$pass='';
	$data='databaseatm';
	$conn=mysqli_connect($server,$user,$pass,$data) or die ('Not Connect!!!');
	mysqli_query($conn, 'set name "utf8"');
?>
