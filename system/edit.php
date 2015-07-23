return <<< EOT
<form action="wikiaction.php?mode=edit" method="post">
ページの名前:<input type="text" name="name" size="20" value="" readonly>(ページ名の変更はできません。)<br>
<textarea name="data" cols="100" rows="15">'

</textarea></p>
<input type="submit" value="反映" />
</form>
</html>
EOT;
