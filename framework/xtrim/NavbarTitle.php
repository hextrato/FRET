<?
    namespace fret\xtrim;
 
    class NavbarTitle extends AbstractContainer {
		
		private $_tagtitle;

		function tagTitle() {return $this->_tagtitle; }
		
        static function _new( string $id ) : AbstractContainer {
			$o = new NavbarTitle($id, __CLASS__);
			$o->_tagtitle = Tag::_new("div");
			$o->_tagtitle->setClass("fret-navbar-title");
			$o->setRootTag( $o->tagTitle() );
			return $o;
        }

		function setTitle( string $title ) { 
			$this->tagTitle()->setInnerContent($title);
			return $this;
		}

    }
?>

