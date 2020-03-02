<?
    namespace fret\xtrim;
 
    class Frame extends AbstractContainer {

		private $_tagdiv;

		function tagDiv() {return $this->_tagdiv; }
		
        static function _new( string $id ) : AbstractContainer {
			$o = new Frame ($id, __CLASS__);
			$o->_tagdiv = Tag::_new("div");
			$o->_tagdiv->setClass("fret-frame");
			$o->_tagdiv->set("id",$id);

			$o->setRootTag( $o->tagDiv() );
			$o->setInnerChildren( $o->tagDiv() );
  
			return $o;
        }

    }
?>