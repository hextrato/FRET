<?
    namespace fret\xtrim;
 
    class TitleH2 extends _Container {
		
		private $_tagtitle;

		function tagTitle() {return $this->_tagtitle; }

        static function _new( string $id ) : _Container {
			$o = new TitleH2($id, __CLASS__);
			$o->_tagtitle = $o->tag("h2",$id); // Tag::_new("H2",$id);
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