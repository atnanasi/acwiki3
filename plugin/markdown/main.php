<?php
// Markdown parser

if ($mode == "view") {
	require_once("plugin/{$plugin_name}/Michelf/Markdown.inc.php");
	use Michelf\Markdown;
	$Text = Markdown::defaultTransform($LawText);
}
?>

