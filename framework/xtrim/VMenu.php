<?
    namespace fret\xtrim;
 
    class VMenu extends AbstractContainer {

		private $_tagdiv;

		function tagDiv() {return $this->_tagdiv; }
		
        static function _new( string $id ) : AbstractContainer {
			$o = new VMenu ($id, __CLASS__);
			$o->_tagdiv = Tag::_new("div");
			$o->_tagdiv->setClass("fret-vmenu");
			$o->_tagdiv->set("id",$id);

			$o->setRootTag( $o->tagDiv() );
			$o->setInnerChildren( $o->tagDiv() );
  
			return $o;
        }

    }
?>