<?
    namespace fret\xtrim;
 
    class Navbar extends _Container {

		private $_tagnav;

		function tagNav() {return $this->_tagnav; }
		
        static function _new( string $id ) : _Container {
			$o = new Navbar ($id, __CLASS__);
			$o->_tagnav = $o->tag("nav"); // Tag::_new("nav");
			$o->setRootTag( $o->_tagnav );
			$o->_tagnav->setClass("fret-navbar");
			$o->_tagnav->setClass(["border","navbar","navbar-expand-xl","navbar-light","bg-light","mb-4"]);

			$o->setInnerChildren( $o->_tagnav );
  
			return $o;
        }

    }
?>