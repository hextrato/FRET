<?
    namespace fret\xtrim;
 
    class TitleH5 extends _Container {
		
		private $_tagtitle;

		function tagTitle() {return $this->_tagtitle; }

        static function _new( string $id ) : _Container {
			$o = new TitleH5($id, __CLASS__);
			$o->_tagtitle = $o->tag("h5",$id); // Tag::_new("H5",$id);
			$o->setRootTag( $o->tagTitle() );
			$o->setInnerChildren( $o->tagTitle() );
			return $o;
        }

		function setTitle (string $title) {
			$this->_tagtitle->setInnerContent($title);
			return $this;
		}
    }
?>