<!DOCTYPE html>
<html>
<head>
  <h1 style="text-align:center;color:#003399"> <b>List of upcoming events</b></h1><br>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <title> List of upcoming events </title>
  </head>
<body>
  <button style="margin: 0% 0% 0% 45%;" onclick="window.location.href='create.php'" type="button" class="btn btn-success">Add  new event</button><br><br>
  <table style="border: 1px solid grey;" class="table table-condensed">
    <tr>
      <th style='border: 1px solid grey; text-align: center;'><b style="color:#0099FF;">№</b></th>
      <th style='border: 1px solid grey; text-align: center'><b style="color:#0099FF;">Event name</b></th>
      <th style='border: 1px solid grey; text-align: center'><b style="color:#0099FF;">Ticket price</b></th>
      <th style='border: 1px solid grey; text-align: center'><b style="color:#0099FF;">Date of the event</b></th>
      <th style='border: 1px solid grey; text-align: center'><b style="color:#0099FF;">Number of seats</b></th>
    </tr>
<?php
require_once('connect2.php');
$a = "SELECT * FROM events WHERE date_deleted IS NULL";
$res = mysqli_query($conn, $a);
 if(mysqli_num_rows($res) > 0){
  while($row= mysqli_fetch_assoc($res)){
    echo '<tr style="border: 1px solid grey;">';
    echo '<td style="border: 1px solid grey;">' .'<b>' . $row['event_id'] . '</b>' . '</td>';
    echo '<td style="border: 1px solid grey;">' . '<b>' . $row['event_name'] . '</b>' . '</td>';
    echo '<td style="border: 1px solid grey;">' . '<b>' . $row['ticket_price'] . '</b>' . '</td>';
    echo '<td style="border: 1px solid grey;">' . '<b><mark>' . $row['event_date'] . '</b></mark>' . '</td>';
    echo '<td style="border: 1px solid grey;">' . '<b>' . $row['seats'] . '</b>' . '</td>';
    echo '<td style="border: 1px solid grey; text-align:center">'.'<a href="update.php?id='.$row['event_id'].'">Edit</a></td>';
    echo '<td style="border: 1px solid grey; text-align:center">'.'<a href="delete.php?id='.$row['event_id'].'">Delete</a></td>';
    echo '</tr>';
  }
}
?>
</table>
</body>
</html>