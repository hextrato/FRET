<? 
include ("XTrimDefaultTagProps.php");
include ("XTrimDefaultTagClass.php");
include ("XTrimDefaultTagStyle.php");
$openTag = "<font$props$css$style color='red'>";
$closTag = "</font>";
echo str_pad("", $level, "\t") . $openTag . $this->_INNER_HTML_BEFORE_CHILDREN . $closTag . "\n";
?>
