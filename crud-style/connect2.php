<?php
$conn = mysqli_connect('localhost', 'root', '', 'eventss');
if (!$conn) {
	
	die("Connection failed: " . mysqli_connect_error());
}
?>