<?php
$config = parse_ini_file("config/acwiki.ini",1);
$RawTopmenu = @file_get_contents("{$config["system"]["pagepass"]}/{$config["wiki"]["topmenu"]}");
$Topmenu = "";
$Theme = $config["wiki"]["theme"];
$MenuTemplate = @file_get_contents("theme/{$Theme}/topmenu.php");
$MenuKeys = explode(PHP_EOL, $RawTopmenu);
foreach($MenuKeys as $MenuKey) {
	$MenuData = explode(",", $MenuKey);
	$MenuReplace1 = str_replace("{Name}",$MenuData[0],$MenuTemplate);
	$Topmenu = $Topmenu.str_replace("{URL}",$MenuData[1],$MenuReplace1)."\n";
}
echo $Topmenu;
?>
