<?php

$title = "Search:".$_GET["q"]."-"."vSearch1";
$readname = "/".$_GET["q"];
$fname = @fopen($readname, "r" );
$read = @fread($fname, filesize($readname));
$midasi = "<h1>Search:".$_GET["q"]." - "."vSearch1"."</h1>";

if ($_GET["q"] == ""){
   echo "検索に使用する文章または単語を入力してください";
}
echo '<br><h1>',$_GET["q"],'の検索結果</h1><br>';
if ($handle = opendir('./')) {
   while (false !== ($file = readdir($handle))) {
      $fe = @fopen("./".$file, "r" );
      $data = @fread($fe, filesize("./".$file));
      if (stristr($data, $_GET["q"])) {
         $spos = strpos($data, $_GET["q"]);
         $epos = strpos($data, "<br>", $spos);
         if ($epos == ""){
            $epos = strlen($data);
         }
         $sname = substr($data, $spos, $epos);
         echo '<h2><a href=',$file,'>',$file,'</a></h2><h4><pre>',$sname,'</pre></h4>';
      }
   }
   closedir($handle);
}
?>