<!DOCTYPE html>
   
<html lang="en">

<head>
<title>date</title>
</head>
<body>
<?php
// date

$date = getdate();

$seconds = $date['seconds'];
$minutes = $date['minutes'];
$hours = $date['hours'];
$monthDay = $date['mday'];
$weekDay = $date['wday'];
$month = $date['mon'];
$year = $date['year'];
$weekDay = $date['weekday'];
$month = $date['month'];

echo "<p>The time is $hours:$minutes:$seconds</p>";
echo "<p>The date is $monthDay/$month/$year</p>";
echo "<p>The month is $month and the day of the week is $weekDay </p>";

?>
</body>
</html>