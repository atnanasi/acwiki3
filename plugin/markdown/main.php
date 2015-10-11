<?php
// Markdown parser
require_once("plugin/{$plugin_name}/Michelf/Markdown.inc.php");
use Michelf\Markdown;
if ($Wikimode == "view") {
	$Pagetext = Markdown::defaultTransform($RawText);
}
?>

