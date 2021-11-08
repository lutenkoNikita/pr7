<?php
	$age = ["Mon" => "8:00", "Tue" => "9:00", "Wed" => "42"];
	echo "Mon start at " . $age['Mon']."<br>";

	foreach($age as $key => $value) {
	   echo "Key=" . $key . ", Value=" . $value;
	   echo "<br>";
	}			
?>