<?php
//Acwiki3.00 atnanasi

$config = parse_ini_file("config/acwiki.ini",1);

if (isset($_GET["q"])){
	$LoadPage = $_GET["q"];
}else{
	$LoadPage = "index";
}
if (isset($_GET["mode"])){
	//if ()
	require_once($_GET["mode"]);
}

$LawText = @file_get_contents("{$config["system"]["pagepass"]}/{$LoadPage}.md");
$Text = $LawText;
$Wikiname = $config["wiki"]["name"];
$Message = $config["wiki"]["message"];
$Footer = $config["wiki"]["footer"];
$Theme = $config["wiki"]["theme"];

$Author = $config["meta"]["author"];
$Description = $config["meta"]["description"];
$Keyword = $config["meta"]["keyword"];
$Styletype = $config["meta"]["styletype"];
$Scripttype = $config["meta"]["scripttype"];
$Robots = $config["meta"]["robots"];
$Generator = $config["meta"]["generator"];

$PageTitle = "{$LoadPage}";

include "theme/{$Theme}/theme.php";
?>