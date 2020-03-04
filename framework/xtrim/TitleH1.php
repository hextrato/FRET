<?
    namespace fret\xtrim;
 
    class TitleH1 extends _Container {
		
		private $_tagtitle;

		function tagTitle() {return $this->_tagtitle; }

        static function _new( string $id ) : _Container {
			$o = new TitleH1($id, __CLASS__);
			$o->_tagtitle = $o->tag("h1",$id); // Tag::_new("h1",$id);
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