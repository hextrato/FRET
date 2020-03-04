<?
    namespace fret\xtrim;
 
    class VMenu extends _Container {

		private $_tagframe;

		function tagFrame() {return $this->_tagframe; }
		
        static function _new( string $id ) : _Container {
			$o = new VMenu ($id, __CLASS__);
			$o->_tagframe = $o->tag("div"); // Tag::_new("div");
			$o->_tagframe->setClass("fret-vmenu");
			$o->_tagframe->set("id",$id);

			$o->setRootTag( $o->tagFrame() );
			$o->setInnerChildren( $o->tagFrame() );
  
			return $o;
        }

    }
?>