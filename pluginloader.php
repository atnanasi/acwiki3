<?php
$plugin = parse_ini_file("config/plugin.ini",1);
foreach($plugin as $key1 => $val1) {
	echo $key1.".";
	foreach($val1 as $key2 => $val2) {
		echo $key2.":".$val2."<br>";
	}
}

?>