<?php
// Markdown parser
require_once("plugin/{$plugin_name}/Michelf/Markdown.inc.php");
use Michelf\Markdown;
if ($mode == "view") {
	$Pagetext = Markdown::defaultTransform($LawText);
}
?>

