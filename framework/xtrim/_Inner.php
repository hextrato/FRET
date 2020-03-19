<?
    namespace fret\xtrim;
 
    class _Inner extends _Container {

		private $_taginner;

		function tagInner() {return $this->_taginner; }
		
        static function _new( string $id ) : _Container {
			$o = new _Inner ($id, __CLASS__);
			$o->_taginner = $o->tag("inner"); 
			$o->setRootTag( $o->tagInner() );
			return $o;
        }

    }
?>