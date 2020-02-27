<?
    namespace fret\xtrim;
 
    class Container extends AbstractContainer {
		
		private $_tagcontainer;
		
		function tagContainer() {return $this->_tagcontainer; }

        static function _new( string $id ) : AbstractContainer {
			$o = new Container($id, __CLASS__);

			$o->_tagcontainer = Tag::_new("div");

			$o->setInnerChildren( $o->tagContainer() );
			
			$o->setRootTag( $o->tagContainer() );

			return $o;
        }


    }
?>