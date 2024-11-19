<?php

// CSS styles

$style = "";

echo($style);

// List

$json = file_get_contents("./list.json");
$list = json_decode($json, true);

$index = 0;
$param = 0;

foreach($list as $level) {
	$index = $index + 1;
	echo("<h1>#" . $index .  "</h1>");
	foreach($level as $key) {
		switch($param) {
			case 0:
			echo("<h2>Name:" . $key . "<br></h2>");	
			$param = $param + 1;
			break;
			
			case 1:
			echo("<h2>ID:" . $key . "<br></h2>");
			$param = $param + 1;
			break;
			
			case 2:
			echo("<h2>Creator:" . $key . "<br></h2>");
			$param = $param + 1;
			break;
			
			case 3:
			echo("<h2>Verifier:" . $key . "<br></h2>");
			$param = 0;
			break;
		}
	}
}

?>