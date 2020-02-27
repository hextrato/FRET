<?
$css = "";
foreach ($this->css()->theList() as $cssclass) {
	$css .= " "."$cssclass";
}
$css = trim($css);
if ($css <> "") $css = " class=\"$css\"";
?>