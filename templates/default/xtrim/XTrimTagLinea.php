<? 
include ("XTrimDefaultTagProps.php");
include ("XTrimDefaultTagClass.php");
include ("XTrimDefaultTagStyle.php");
$openTag = "<" . $this->_TAG . $props . $css . $style . ">";
$closTag = "</" . $this->_TAG . ">";
echo str_pad("", $level, "\t") . $openTag;
if ($this->_INNER_HTML_BEFORE_CHILDREN <> "") echo $this->_INNER_HTML_BEFORE_CHILDREN;
$this->showChildTags($level);
if ($this->_INNER_HTML_AFTER_CHILDREN <> "") echo $this->_INNER_HTML_AFTER_CHILDREN;
echo $closTag . "\n";
?>
