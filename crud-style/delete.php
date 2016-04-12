<?php 
echo "<body style='background-color:#99CCCC'>";
$conn = mysqli_connect('localhost', 'root', '', 'eventss');
// if (!$conn) {
// 	die("You are not connected: " .mysqli_connect_error());
// 	} else {
// 	echo "You are connected!";
// 	}

$event_id = $_GET['id'];
$date = date('Y-m-d');

$delete_query = "UPDATE events SET date_deleted ='$date' WHERE event_id=$event_id";
$delete_result = mysqli_query($conn, $delete_query);

if ($delete_result) {
 			
		echo "You succesfully deleted the record from the DB!";
		echo "<p><a href='read.php'>Read DB</a></p>";
	}else{
		echo "You unsuccesfully deleted the record from the DB! Please try again later!";
		echo "<p><a href='create.php'> link for creating </a></p>";
		echo "<p><a href='update.php'> link for updating </a></p>";
	}
?>