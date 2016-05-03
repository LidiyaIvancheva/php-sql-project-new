<!DOCTYPE html>
<html>
<head>
  <h1 style="text-align:center;color:green"> <b>Update of the events</b></h1><br>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <title> Update of the events </title>
  </head>
<body>

<?php
echo "<body style='background-color:#99CCCC'>";
$conn = mysqli_connect('localhost', 'root', '', 'eventss');
// if (!$conn) {
//  	die("Connection failed: " .mysqli_connect_error());
//  	} else {
//  	echo "Connected successfully !";
//  	}
if(empty($_POST['submit'])){

	$event_id = $_GET['id'];

	$q = "SELECT * FROM events WHERE event_id = $event_id";
	$res = mysqli_query($conn, $q);
	$row = mysqli_fetch_assoc($res);

//edit the event name
	echo "<p>Edit the event name</p>";
	echo "<form action='update.php' method='post'>";
	echo "<input type='hidden' name='event_id' value=".$row['event_id'].">";
	echo "<input type='text' name='event_name' value='".$row['event_name']."'>";
	echo "<p>Edit the number of seats</p>";
	echo "<input type='text' name='seats' value='".$row['seats']."'>";
	echo "<p>Edit the tickets price</p>";
	echo "<input type='text' name='ticket_price' value='".$row['ticket_price']."'>";
	echo "<p>Edit the event date</p>";
	echo "<input type='text' name='event_date' value='".$row['event_date']."'>";
	echo "<br>";
	echo "<input type='submit' name='submit' value='update'>";
	echo "</form>";

}else {

	$event_id = $_POST['event_id'];
	$event_name = $_POST['event_name'];
	$update_query = "UPDATE events 
					SET event_name = '$event_name'
					WHERE event_id=$event_id";

	$event_id = $_POST['event_id'];
	$ticket_price = $_POST['ticket_price'];
	$update_query = "UPDATE events 
					SET ticket_price = '$ticket_price'
					WHERE event_id=$event_id";

	$event_id = $_POST['event_id'];
	$event_date = $_POST['event_date'];
	$update_query = "UPDATE events 
					SET event_date = '$event_date'
					WHERE event_id=$event_id";

	$event_id = $_POST['event_id'];
	$seats = $_POST['seats'];
	$update_query = "UPDATE events 
					SET seats = '$event_date'
					WHERE event_id=$event_id";
					
					
	$update_result= mysqli_query($conn, $update_query);
	if ($update_result) {
 				
		echo "You sucessfully updated the $event_name $ticket_price $event_date $seats in the DB!";
		echo "<p><a href='read.php'>Read DB</a></p>"; 
	}else{
		echo "you were not able to update the data! Please try again!";
		echo "<p><a href='read.php'>Main page</a></p>";
	}
}
?>
</body>
</html>
