<?
    namespace fret\xtrim;
 
    class TitleH2 extends AbstractContainer {
		
		private $_tagtitle;

		function tagTitle() {return $this->_tagtitle; }

        static function _new( string $id ) : AbstractContainer {
			$o = new TitleH2($id, __CLASS__);
			$o->_tagtitle = Tag::_new("H2",$id);
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