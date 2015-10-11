<?php
//Acwiki3.00 atnanasi
$root = __DIR__;
require_once"lib/acwiki/core.php";

$config = parse_ini_file("config/acwiki.ini",1);
$plugin = parse_ini_file("config/plugin.ini",1);

if (isset($_GET["q"])) {
	$LoadPage = htmlspecialchars($_GET["q"]);
}else{
	$LoadPage = htmlspecialchars("index");
}
if (isset($_GET["mode"]) == 0) {
	$Wikimode = htmlspecialchars("view");
}else{
	$Wikimode = htmlspecialchars($_GET["mode"]);
}

//Error check

if (!(file_exists($LoadPage))) {
	http_response_code(404);
}

if (strstr($LoadPage,"..")) {
	error("Can't use ..!");
	exit;
}

$RawText = @file_get_contents("{$config["system"]["pagepass"]}/{$LoadPage}.md");
$RawTopmenu = @file_get_contents("{$config["system"]["pagepass"]}/{$config["wiki"]["topmenu"]}");
$RawSidebar = @file_get_contents("{$config["system"]["pagepass"]}/{$config["wiki"]["sidebar"]}");

$Wikiname = $config["wiki"]["name"];
$Message = $config["wiki"]["message"];
$Topmenu = $RawTopmenu;
$Pagetitle = "{$LoadPage}";
$Pagedate = "";
$Pagetext = $RawText;
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

include "theme/{$Theme}/theme.php";
?>
