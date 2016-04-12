<!DOCTYPE html>
<html>
<head>

  <h1 style="text-align:center; color:blue"> Add a new event </h1><br>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <title> Add a new event </title>
  </head>
<body>
<?php 
echo "<body style='background-color:lightblue'>";
$conn = mysqli_connect('localhost', 'root', '', 'eventss');
if(empty($_POST['submit'])){
	echo "<div align='middle'>";
	echo "<form action='create.php' method='post'><br>";
	echo "<i>Event name:</i><br>";
	echo "<input type='text' name='event_name'><br>";
	echo "<i>Description:</i><br>";
	echo "<input type='text' name='event_name'><br>";
	echo "<i>Price:</i><br>";
	echo "<input type='text' name='price'><br>";
	echo "<i>Date of the event:</i><br>";
	echo "<input type='text' name='event_date'><br>";
	echo "<i>Number of seats:</i><br>";
	echo "<input type='text' name='seats'><br>";
	echo "<i>Date of events end:</i><br>";
	echo "<input type='text' name='end_date'><br><br>";
	echo "<input type='submit' name='submit' value='Add'>";
	echo "</div>";
	echo "</form>";
}
else{
	$event_name 	= $_POST['event_name'];
	$price			= $_POST['price'];
	$event_date		= $_POST['event_date'];
	$seats			= $_POST['seats'];
	$end_date		= $_POST['end_date'];
	$insert = "INSERT INTO events (event_name, price, event_date, seats, end_date)
				 VALUES ('$event_name', '$price', '$event_date', '$seats', '$end_date')";
			$add_res = mysqli_query($conn, $insert);

			if ($add_res) {
				echo "Successfully inserted into the DB!<br>";
				echo "<a href='read.php'>Take a look at the DB</a>";
				echo "<p><a href='read.php'>Read DB</a></p>";
				}
					else{
						echo "Oops! Something went wrong! Please try again later!<br>";
						echo "<a href='create.php'>Go back </a>";
						}
	}
?>
<body>
</html>