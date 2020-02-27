<? 
include ("XTrimDefaultTagProps.php");
include ("XTrimDefaultTagClass.php");
$openTag = "<font$props$css color='red'>";
$closTag = "</font>";
echo str_pad("", $level, "\t") . $openTag . $this->_INNER_HTML_BEFORE_CHILDREN . $closTag . "\n";
?>
