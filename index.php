<?php
//Acwiki3.00 atnanasi
$root = __DIR__;
$version = "3.00";
require_once"lib/acwiki/core.php";

$config = parse_ini_file("config/acwiki.ini",1);
$plugin = parse_ini_file("config/plugin.ini",1);

if (isset($_GET["q"])) {
	$LoadPage = htmlspecialchars($_GET["q"]);
}else{
	$LoadPage = "index";
}
if (isset($_GET["mode"]) == 0) {
	$Wikimode = "view";
}else{
	$Wikimode = htmlspecialchars($_GET["mode"]);
}

//Error check

if (strstr($Wikimode,"..")) {
	http_response_code(404);
	echo error("404 NotFound",$config["system"]["pagepass"],"It's an unjust URL.");
	exit;
}
if (!(file_exists("system/{$Wikimode}.php"))) {
	http_response_code(404);
	echo error("404 NotFound",$config["system"]["pagepass"],"The appointed mode does not exist.");
	exit;
}

if ($Wikimode == "view") {
	if (strstr($LoadPage,"..")) {
		http_response_code(404);
		echo error("404 NotFound",$config["system"]["pagepass"],"It's an unjust URL.");
		exit;
	}
	if (!(file_exists("{$config["system"]["pagepass"]}/{$LoadPage}.md"))) {
		http_response_code(404);
		echo error("404 NotFound",$config["system"]["pagepass"],"The appointed file does not exist.");
		exit;
	}
	$RawText = file_get_contents("{$config["system"]["pagepass"]}/{$LoadPage}.md");
}


$RawTopmenu = file_get_contents("{$config["system"]["pagepass"]}/{$config["wiki"]["topmenu"]}");
$RawSidebar = file_get_contents("{$config["system"]["pagepass"]}/{$config["wiki"]["sidebar"]}");

$Wikiname = $config["wiki"]["name"];
$Message = $config["wiki"]["message"];
$Topmenu = $RawTopmenu;
$Pagetitle = "{$LoadPage}";
$Pagedate = "";
$Sidebar = $RawSidebar;
$Footer = $config["wiki"]["footer"];
$Theme = $config["wiki"]["theme"];


$Author = $config["meta"]["author"];
$Description = $config["meta"]["description"];
$Keyword = $config["meta"]["keyword"];
$Styletype = $config["meta"]["styletype"];
$Scripttype = $config["meta"]["scripttype"];
$Robots = $config["meta"]["robots"];
$Generator = $config["meta"]["generator"];

//PluginLoader
if ($plugin["plugin"]["is"] == "enable") { 
	foreach($plugin as $plugin_name => $val1) {
		if ($plugin[$plugin_name]["is"] = "enable") {
			include "plugin/{$plugin_name}/main.php";
		}
	}
}

//SpecialPageLoader
if (!($Wikimode == "view")) {
	include "system/{$Wikimode}.php";
}
include "theme/{$Theme}/theme.php";
?>
