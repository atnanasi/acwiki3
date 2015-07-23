<?php
//Acwiki3.00 atnanasi

//require_once("lib/phpmarkdown/Michelf/Markdown.inc.php");
//use Michelf\Markdown;

if (isset($_GET["mode"])){
   $LoadPage = $_GET["mode"];
}else{
   $LoadPage = "";
}

$LawText = @file_get_contents("system/{$LoadPage}.php");
$Text = eval($LawText);

$Title = @file_get_contents("config/Title.txt");
$Message = @file_get_contents("config/Message.txt");
$KeyWord = @file_get_contents("config/KeyWord.txt");
$Footer = @file_get_contents("config/Footer.txt");
$Theme = @file_get_contents("config/Theme.txt");

$PageTitle = $LoadPage;

include "theme/{$Theme}/theme.php";
?>

