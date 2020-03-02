<?
    namespace fret\xtrim;
 
    abstract class AbstractContainer { // extends \fret\core\BaseProps {

		private $_ID = "";
		private $_INNER_HTML_BEFORE = "";
		private $_INNER_HTML_AFTER = "";
		private $_XTRIM_TEMPLATE = "";
         
        private $_CHILDREN = array();
        private $_ROOT_TAG = null;
        private $_CLASS = null;

		private $_xinner;
		function xinner() { return $this->_xinner; }
		
		function setInnerChildren( Tag $tag ) {
			$tag->add($this->_xinner);
			return $this;
		}
		
		function setClass( string $cssClass ) {
			$this->_CLASS = $cssClass;
			return $this;
		}
		
        function __construct($id, $class) {
			$this->_ID = $id;
			$this->_XTRIM_TEMPLATE = str_replace("fret\\xtrim\\","",__CLASS__);
			$this->_xinner = Tag::_new("empty");
			$this->_xinner->setInnerContainer($this);
            return $this;
			/*
			$this->_name = $containerName;
			$this->_type = "X2Component";
			$this->_layout = "";
			$this->_style = "";
			$this->_template = $GLOBALS["E2DEFAULT_TEMPLATE"];
			$this->componentList = array();
			$this->componentCount = 0;
			$this->defaultAddInto = $this;
			return $this;
			*/
			/*
            $this->set("php.class",__CLASS__);
            $this->set("ueb.type",str_replace("huebby\\web\\","",__CLASS__));
            $this->set("ueb.template",\huebby\system\Parameters::get("HUEBBY::TEMPLATES::DEFAULT"));
            $this->set("ueb.layout","");
            $this->set("web.id",$id);
            $this->set("web.class","");
            $this->set("web.style","");
            //$this->set("_text","");
            //$this->set("text","");
            //$this->set("caption","");
            //$this->set("status","");
            //$this->set("href","");
            $this->_children = \huebby\system\ResourceList::_new('huebby\web\\');
            $this->_defaultChild = null;
			*/
        }

        static function _new ( string $id ) : AbstractContainer {
			return new AbstractContainer($id, __CLASS__);
		}

        function getChildren() { 
			return $this->_CHILDREN; 
		}

        function setRootTag(Tag $tag) { 
			$this->_ROOT_TAG = $tag; 
			return $this;
		}

		/*
        function set ( string $property , string $value ) : AbstractContainer {
			$property = strtolower ( $property );
			if ($property == "id") $this->_ID = $value; else
			if ($property == "html") $this->_INNER_HTML = $value; else
			parent::set( $property , $value );
            return $this;
        }

        function get ($property) : string { 
			$property = strtolower ( $property );
			if ($property == "id") return $this->_ID; else
			if ($property == "tag") return $this->_TAG; else
			return parent::get ($property);
        }
		*/

		function add ( AbstractContainer $container ) : AbstractContainer {
			// var_dump($container);
			$this->_CHILDREN[] = $container;
			return $this;
		}
		
        function setInnerContent ( string $value ) : AbstractContainer {
			$this->_ROOT_TAG->setInnerContent($value);
			return $this;
		}
		
        function show (int $level = 0) : void { 
			// var_dump($this->_XTRIM_TEMPLATE);
			$templateFileName = $GLOBALS["FRET_TEMPLATE_PATH"] . DIRECTORY_SEPARATOR . "xtrim" . DIRECTORY_SEPARATOR . $this->_XTRIM_TEMPLATE . ".php";
            include $templateFileName;
        }

		/*
        function setDefaultChild( ) {
            $this->_defaultChild = $container;
            return $this;
        }

        function add($resource) {
            if ($resource == null) return $this;
            if (!is_Object($resource)) throw new \huebby\system\Exception ("Invalid object.");
            if ($this->_defaultChild === null)
                $this->getChildren()->add($resource);
            else
                $this->_defaultChild->getChildren()->add($resource);
            return $this;
        }

        function getContainer($containerID, $cascade=false, $internalrecursive=false) {
            $c = null;
            foreach($this->getChildren()->getArray() as $component) {
                if ($component->get("web.id") == $containerID)
                    return $component;
            }
            if ($cascade)
                foreach($this->getChildren()->getArray() as $component) {
                    $c = $component->getContainer($containerID,$cascade,true);
                    if (!($c==null)) return $c;
                    // return $component;
                }

            if (!($c==null)) return $c; else return null;

            //if ($internalrecursive)
            //  return null;
            //else
            //  return $this->_new($containerName);
        }

        function showChildContainers() {
            foreach($this->getChildren()->getArray() as $component) $component->show();
        }

		*/

		/*
        function show() {
            $newline = "\n";
            if ( $this->get("ueb.layout") == "" ) $this->set("ueb.layout",$this->get("ueb.type"));
            if ( $this->get("web.class")  == "" ) $this->set("web.class",$this->get("ueb.type"));
            $filename = \huebby\system\Parameters::get("HUEBBY::TEMPLATES::PATH")
                .DIRECTORY_SEPARATOR
                .$this->get("ueb.template")
                .DIRECTORY_SEPARATOR
                .$this->get("ueb.layout")
                .\huebby\system\Parameters::get("HUEBBY::TEMPLATES::FILEEXT");
			include $filename;
        }
		*/
		
		
    }
?>