<?php
//Acwiki3.0 SpecialPage()

$title = "Edit:".$_GET["q"]."-".$wikiname;
$readname = "pages/".$_GET["q"];
$fname = @fopen($readname, "r" );
$read = @fread($fname, filesize($readname));
$midasi = "<h1>Edit:".$_GET["q"]." - ".$wikiname."</h1>";
include "lib/base.php";
if ($fname == FALSE){
   echo "<h2>ページが存在しません。</h2>";
   include "lib/ebase.php";
   exit;
}
if ($_GET["q"] == ""){
   echo "<h2>ページ名が不正です。</h2>";
   include "lib/ebase.php";
   exit;
}
?>
<h2>編集モード</h2><br>
下の大きなテキストボックスを編集してください。（改行は&lt;br&gt;を入力してください。また、HTMLタグが使用できます。）<br>
<?php
echo '<form action="wikiaction.php?mode=edit" method="post">';
echo 'ページの名前:<input type="text" name="name" size="20" value="',$_GET["q"],'" readonly>(ページ名の変更はできません。)<br>';
echo '<textarea name="data" cols="100" rows="15">';
echo $read;
echo '</textarea></p>';
echo '<input type="submit" value="反映" />';
echo '</form>';
include "lib/ebase.php";
?>
