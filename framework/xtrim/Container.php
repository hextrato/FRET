<?
    namespace fret\xtrim;
 
    class Container extends _Container {
		
		private $_tagcontainer;
		
		function tagContainer() {return $this->_tagcontainer; }

        static function _new( string $id ) : _Container {
			$o = new Container($id, __CLASS__);
			$o->_tagcontainer = $o->tag("div"); // Tag::_new("div");
			$o->setInnerChildren( $o->tagContainer() );
			$o->setRootTag( $o->tagContainer() );
			return $o;
        }


    }
?>