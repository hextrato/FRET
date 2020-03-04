<?
    namespace fret\xtrim;
 
    class Frame extends _Container {

		private $_tagdiv;

		function tagFrame() {return $this->_tagdiv; }
		function tagDiv() {return $this->_tagdiv; }
		
        static function _new( string $id ) : _Container {
			$o = new Frame ($id, __CLASS__);
			$o->_tagdiv = $o->tag("div"); // Tag::_new("div");
			$o->_tagdiv->setClass("fret-frame");
			$o->_tagdiv->set("id",$id);

			$o->setRootTag( $o->tagDiv() );
			$o->setInnerChildren( $o->tagDiv() );
  
			return $o;
        }

    }
?>