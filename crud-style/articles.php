<?php 
$conn = mysqli_connect('localhost', 'root', '', 'eventss');
// if (!$conn) {
//  	die("Connection failed: " .mysqli_connect_error());
//  	} else {
//  	echo "Connected successfully !";
//  	}
$txt = "You can read more about some interesting events in Berlin, Germany<br>
<i>With the 'read more', goes to the full article page in English</i>:";
        echo "<h4>" . $txt . "</h4>";

	$q = "SELECT * FROM `article` ORDER BY `id` DESC LIMIT 5";
	$res = mysqli_query($conn, $q);
	$n = 0;
	$article = array(array());
	if (mysqli_num_rows($res)>0) {
		while ($row = mysqli_fetch_assoc($res)) {
			foreach ($row as $key => $value) {
				$article[$n][$key] = $value;
				if (isset($article[$n]['text'])) {
					$description = $article[$i]['text'];
					$article[$n]['min'] = substr($description, 0, 200);
				}
			}
			$n++;
		}
	}
	
	for ($l=0; $l < 5 ; $l++) { 
		echo " </p>";
		echo $article[$l]['article_name']."<br/>";
		echo $article[$l]['date_published']."<br/>";
		$id = $article[$l]['id'];
		echo "<a href='https://www.berlin.de/en/events/april/'>full list with news in Berlin</a><br/>";
		echo " </p>";
	}
