<?
$props = "";
if ($this->_ID <> "") $props .= " "."id=\"$this->_ID\"";
foreach ($this->props() as $prop => $value) {
	if ($value == null)
		$props .= " "."$prop";
	else
		$props .= " "."$prop=\"$value\"";
}
?>