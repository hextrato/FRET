<?
$style = "";
foreach ($this->style()->props() as $prop => $value) {
	$style .= " "."$prop:$value;";
}
$style = trim($style);
if ($style <> "") $style = " style=\"$style\"";
?>