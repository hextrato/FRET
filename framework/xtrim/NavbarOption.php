<?
    namespace fret\xtrim;
 
    class NavbarOption extends _Container {
		
		private $_tagoption;
		private $_xlink;

		function tagOption() {return $this->_tagoption; }
		function xLink() {return $this->_xlink; }

        static function _new( string $id ) : _Container {
			$o = new NavbarOption($id, __CLASS__);
			$o->_tagoption = $o->tag("li"); // Tag::_new("li");
			$o->_tagoption->setClass(["fret-navbar-option","nav-item","active"]);
			$o->setRootTag( $o->_tagoption );
			$o->setInnerChildren( $o->_tagoption );

			$o->_xlink = Link::_new("");
			$o->_xlink->tagLink()->setClass("nav-link");
			$o->add( $o->_xlink );
			
			return $o;
        }

		function setURL (string $url) {
			$this->_xlink->tagLink()->set("href",$url);
			return $this;
		}
		function setCaption (string $caption) {
			$this->_xlink->tagLink()->setInnerContent($caption);
			return $this;
		}

    }
?>