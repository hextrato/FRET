<?
    namespace fret\xtrim;
 
    class Tag extends \fret\core\BaseProps {

		static private $VALID_TAG_TEMPLATES = array(
			"fully" => array ("tags" => array("html","head","body","form","div","nav","button","ul","ol","li") , "template" => "Fully")
			,
			"linea" => array ("tags" => array("title","script","h1","h2","h3","h4","h5","a","span") , "template" => "Linea")
			,
			"isola" => array ("tags" => array("meta","link","p","br","img","input") , "template" => "Isola")
			,
			"ctrls" => array ("tags" => array("virtual") , "template" => "Ctrls")
			,
			"xtrim" => array ("tags" => array("empty") , "template" => "Empty")
			,
			"error" => array ("tags" => array("error") , "template" => "Error")
			,
			"sgvf"   => array ("tags" => array("sgv","g") , "template" => "Fully")
			,
			"sgvl"   => array ("tags" => array("text") , "template" => "Linea")
		);
		
		private $_TAG = "";
		private $_ID = "";
		private $_XTRIM_TEMPLATE = "";
		private $_INNER_HTML_BEFORE_CHILDREN = "";
		private $_INNER_HTML_AFTER_CHILDREN = "";

		private $_CHILDREN = array();
		private $_INNER_CONTAINER = null;

		private $_CLASS = null;
		private $_STYLE = null;

		function css() {
			return $this->_CLASS;
		}

		function setClass($classes) {
			$this->_CLASS->set($classes);
			return $this;
		}
		
        function getChildren() { 
			return $this->_CHILDREN; 
		}
                  
        function setInnerContainer($parent) { 
			if ($this->_TAG == "empty")
				$this->_INNER_CONTAINER = $parent; 
			else
				$this->_INNER_CONTAINER = $null; 
			return $this;
		}

		static function isValidTag( string $tag ) {
			$tag = strtolower($tag);
			foreach (self::$VALID_TAG_TEMPLATES as $template)
				if (in_array($tag,$template["tags"]))
					return true;
			return false;
		}
		
		static function getValidTemplate( string $tag ) : string {
			$tag = strtolower($tag);
			foreach (self::$VALID_TAG_TEMPLATES as $template)
				if (in_array($tag,$template["tags"]))
					return $template["template"];
			return "";
		}
		
        function __construct() {
            parent::__construct();
            return $this;
        }
       
        static function _new ( string $tag , string $id = "" ) : Tag {
			$tag = strtolower($tag);
			if (!self::isValidTag($tag)) {
				$e = new \fret\console\Exception("Invalid qwert tag '$tag'");
				$c = Tag::_new("error",$e->getMessage());
			} else {
				$c = new Tag();
				$c->_ID = $id;
				$c->_TAG = $tag;
				$c->_CLASS = new \fret\core\BaseList;
				$c->_XTRIM_TEMPLATE = self::getValidTemplate($tag);
				if ($c->_XTRIM_TEMPLATE == "") $c->_XTRIM_TEMPLATE = "default";
			}
			return $c;
        }

		function getID ( ) : string {
			return $this->_ID;
		}
		function getTAG ( ) : string {
			return $this->_TAG;
		}

		function add ( Tag $child ) : Tag {
			$this->_CHILDREN[] = $child;
			return $this;
		}

        function set ( string $property , string $value ) : Tag {
			$property = strtolower ( $property );
			if ($property == "id") $this->_ID = $value; else
			if ($property == "tag") $this->_TAG = $value; else
			if ($property == "html") $this->_INNER_HTML = $value; else
			parent::set( $property , $value );
            return $this;
        }

        function setInnerHtml ( string $value ) : Tag {
			return $this->setInnerHtmlBefore($value);
		}

        function setInnerHtmlBefore ( string $value ) : Tag {
			$this->_INNER_HTML_BEFORE_CHILDREN = $value;
			return $this;
		}

        function setInnerHtmlAfter ( string $value ) : Tag {
			$this->_INNER_HTML_AFTER_CHILDREN = $value;
			return $this;
		}

        function setTemplate ( string $template ) : Tag {
			$this->_XTRIM_TEMPLATE = $template;
			return $this;
		}

        function getInnerHtmlBefore ( ) : string {
			return $this->_INNER_HTML_BEFORE_CHILDREN;
		}
        function getInnerHtmlAfter ( ) : string {
			return $this->_INNER_HTML_AFTER_CHILDREN;
		}

        function get ($property) : string { 
			$property = strtolower ( $property );
			if ($property == "id") return $this->_ID; else
			if ($property == "tag") return $this->_TAG; else
			return parent::get ($property);
        }

        function show (int $level = 0) : void { 
			$templateFileName = $GLOBALS["FRET_TEMPLATE_PATH"] . DIRECTORY_SEPARATOR . "xtrim" . DIRECTORY_SEPARATOR . "XTrimTag" . $this->_XTRIM_TEMPLATE . ".php";
            include $templateFileName;
        }
		
		function showChildTags (int $level = 0) : void { 
			foreach ($this->_CHILDREN as $childTag) {
				$childTag->show($level+1);
			}
        }	
    }
?>