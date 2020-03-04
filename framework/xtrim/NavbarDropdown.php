<?
    namespace fret\xtrim;
 
    class NavbarDropdown extends _Container {
		
		private $_tagoption;
		private $_tagdropdown;
		private $_xlink;

		function tagOption() {return $this->_tagoption; }
		function tagDropdown() {return $this->_tagdropdown; }
		function xLink() {return $this->_xlink; }

        static function _new( string $id ) : _Container {
			$o = new NavbarDropdown($id, __CLASS__);
			$o->_tagoption = $o->tag("li"); // Tag::_new("li");
			$o->_tagoption->setClass(["fret-navbar-option","nav-item","dropdown","active"]);
			$o->setRootTag( $o->_tagoption );
			$o->setInnerChildren( $o->_tagoption );

			$o->_xlink = Link::_new($id);
			$o->_xlink->tagLink()->setClass(["nav-link","dropdown-toggle"]);
			$o->_xlink->tagLink()
				//->set("role","button")
				->set("data-toggle","dropdown")
				->set("aria-haspopup","true")
				->set("aria-expanded","false")
				->set("href","#")
			;
			$o->add( $o->_xlink );

			$o->_tagdropdown = $o->tag("div"); // Tag::_new("div");
			$o->_tagdropdown->setClass(["fret-navbar-dropdown","dropdown-menu"]);
			$o->_tagdropdown->set("aria-labelledby",$id);

			$o->_tagoption->add( $o->_tagdropdown );
			
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

		function addOption (string $caption, string $url) {
			$option = $this->tag("a"); // Tag::_new("a");
			$option->setClass("dropdown-item");
			$option->set("href",$url);
			$option->setInnerContent($caption);
			$this->_tagdropdown->add($option);
			return $this;
		}
		function addDivider () {
			$divider = $this->tag("div"); // Tag::_new("div");
			$divider->setClass("dropdown-divider");
			$this->_tagdropdown->add($divider);
			return $this;
		}

    }
?>