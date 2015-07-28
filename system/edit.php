return <<< EOT
<form action="function/pagectl.php?mode=edit" method="post">
ページの名前:<input type="text" name="name" size="20" value="{$_GET["name"]}" readonly>(ページ名の変更はできません。)<br>
<textarea name="text" cols="100" rows="15">
</textarea></p>
<input type="submit" value="完了" />
</form>
</html>
EOT;
