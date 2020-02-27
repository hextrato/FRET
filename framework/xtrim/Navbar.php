<?
    namespace fret\xtrim;
 
    class Navbar extends AbstractContainer {

		private $_tagnav;

		function tagNav() {return $this->_tagnav; }
		
        static function _new( string $id ) : AbstractContainer {
			$o = new Navbar ($id, __CLASS__);
			$o->_tagnav = Tag::_new("nav");
			$o->setRootTag( $o->_tagnav );
			$o->_tagnav->css()->set("fret-navbar");
			$o->_tagnav->css()->add(["border","navbar","navbar-expand-xl","navbar-light","bg-light","mb-4"]);

			$o->setInnerChildren( $o->_tagnav );
  
			return $o;
        }

    }
?>