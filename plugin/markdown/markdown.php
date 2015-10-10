// Markdown parser

require_once("lib/phpmarkdown/Michelf/Markdown.inc.php");
use Michelf\Markdown;

$Text = Markdown::defaultTransform($LawText);

