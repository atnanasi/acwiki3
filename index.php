<?php
//Acwiki3.00 atnanasi

$config = parse_ini_file("config/acwiki.ini",1);
$plugin = parse_ini_file("config/plugin.ini",1);

if (isset($_GET["q"])) {
	$LoadPage = $_GET["q"];
}else{
	$LoadPage = "index";
}
if (isset($_GET["mode"]) == 0) {
	$mode = "view";
}

$LawText = @file_get_contents("{$config["system"]["pagepass"]}/{$LoadPage}.md");

$Wikiname = $config["wiki"]["name"];
$Message = $config["wiki"]["message"];
$Topmenu = "";
$Pagetitle = "{$LoadPage}";
$Pagedate = "";
$Pagetext = $LawText;
$Sidebar = "";
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
