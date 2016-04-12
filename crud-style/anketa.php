<!DOCTYPE html>
   
<html lang="en">

<head>
<style type="text/css">

.submit {
  border: 2px solid black;
  background-color: blue;
  padding: 10px;
  margin: 10px;
  width: 120px;
}

</style>
</head>
<body>
</head>
<body>
<h2>Please select your favorite European country for your event:</h2>

<form action='<?php echo $_SERVER["PHP_SELF"]; ?>' method='post'>
<label for="bulgaria">Bulgaria: </label>
<input type='radio' name='country' value='bulgaria' id='bulgaria'/>
<label for="poland">Poland: </label>
<input type='radio' name='country' value='poland' id='poland'/>
<label for="france">France: </label>
<input type='radio' name='country' value='france' id='france'/>
<label for="germany">Germany: </label>
<input type='radio' name='country' value='germany' id='germany'/>
<label for="italy">Italy: </label>
<input type='radio' name='country' value='italy' id='italy'/>
<label for="spain">Spain: </label>
<input type='radio' name='country' value='spain' id='spain'/>
<label for="serbia">Serbia: </label>
<input type='radio' name='country' value='serbia' id='serbia'/>
<label for="portugal">Portugal: </label>
<input type='radio' name='country' value='portugal' id='portugal'/>
<label for="belgium">Belgium: </label>
<input type='radio' name='country' value='belgium' id='belgium'/>
<label for="hungary">Hungary: </label>
<input type='radio' name='country' value='hungary' id='hungary'/>
<label for="romania">Romania: </label>
<input type='radio' name='country' value='romania' id='romania'/>
<label for="croatia">Croatia: </label>
<input type='radio' name='country' value='croatia' id='croatia'/>
<label for="czech republik">Czech Republik: </label>
<input type='radio' name='country' value='czech republik' id='czech republik'/>

<input type="submit" name="submit" value="send &raquo;" class="submit"/>
</form>

<?php
// anketa

echo "<body style='background-color:#CCCCFF'>";

if (isset($_POST["submit"])) {
    $country = $_POST["country"];
    echo "<p>Your favorite country is $country</p>";
}
?>
</body>
</html>