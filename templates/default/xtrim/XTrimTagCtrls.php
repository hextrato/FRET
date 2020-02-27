<? 
if ($this->_INNER_HTML_BEFORE_CHILDREN <> "") echo str_pad("", $level, "\t") . $this->_INNER_HTML_BEFORE_CHILDREN . "\n";
$this->showChildTags($level-1);
if ($this->_INNER_HTML_AFTER_CHILDREN <> "") echo str_pad("", $level, "\t") . $this->_INNER_HTML_AFTER_CHILDREN . "\n";
?>
