<?
    namespace fret\xtrim;
 
    class TitleH4 extends _Container {
		
		private $_tagtitle;

		function tagTitle() {return $this->_tagtitle; }

        static function _new( string $id ) : _Container {
			$o = new TitleH4($id, __CLASS__);
			$o->_tagtitle = $o->tag("h4",$id); // Tag::_new("H4",$id);
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