<?
    namespace fret\xtrim;
 
    class Infobox extends _Container {

		private $_tagframe;

		function tagFrame() {return $this->_tagframe; }
		
        static function _new( string $id ) : _Container {
			$o = new Infobox ($id, __CLASS__);
			$o->_tagframe = $o->tag("div"); // Tag::_new("div");
			$o->_tagframe->setClass(["inline","top"]);
			// $o->_tagframe->set("style","border: 1px solid #ddd; border-radius: 4px; margin: 16px; width: 30%; valign: top");
			$o->_tagframe->set("style","border: 0px solid #ddd; border-radius: 4px; margin: 16px; max-width: 30%; vertical-align: top; text-align: left;");
			
			$o->setRootTag( $o->tagFrame() );
			$o->setInnerChildren( $o->tagFrame() );
  
			return $o;
        }

    }
?>