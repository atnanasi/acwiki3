<?php
//Acwiki3.00 atnanasi

require_once("lib/phpmarkdown/Michelf/Markdown.inc.php");
use Michelf\Markdown;

if (isset($_GET["mode"])){
   $LoadPage = $_GET["mode"];
}else{
   $LoadPage = "";
}

$LawText = @file_get_contents("page/{$LoadPage}.md");
$Text = Markdown::defaultTransform($LawText);

$Title = @file_get_contents("config/Title.txt");
$Message = @file_get_contents("config/Message.txt");
$KeyWord = @file_get_contents("config/KeyWord.txt");
$Footer = @file_get_contents("config/Footer.txt");
$Theme = @file_get_contents("config/Theme.txt");

$PageTitle = $LoadPage;

include "theme/{$Theme}/theme.php";
?>
<form action="wikiaction.php?mode=edit" method="post">
ページの名前:<input type="text" name="name" size="20" value="" readonly>(ページ名の変更はできません。)<br>
<textarea name="data" cols="100" rows="15">'

</textarea></p>
<input type="submit" value="反映" />
</form>


