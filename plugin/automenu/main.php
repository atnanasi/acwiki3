<?php
//Auto menu - Auto menu generator
//Name,Url

if ($Wikimode) {
	$Topmenu = "";
	$MenuTemplate = file_get_contents("theme/{$Theme}/topmenu.php");
	$MenuKeys = explode(PHP_EOL, $RawTopmenu);
	foreach($MenuKeys as $MenuKey) {
		$MenuData = explode(",", $MenuKey);
		$MenuReplace1 = str_replace("{Name}",$MenuData[0],$MenuTemplate);
		$Topmenu = $Topmenu.str_replace("{URL}",$MenuData[1],$MenuReplace1)."\n";
	}
}
?>
