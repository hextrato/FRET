<?
    namespace fret\xtrim;
 
    class TitleH1 extends AbstractContainer {
		
		private $_tagtitle;

		function tagTitle() {return $this->_tagtitle; }

        static function _new( string $id ) : AbstractContainer {
			$o = new TitleH1($id, __CLASS__);
			$o->_tagtitle = Tag::_new("h1",$id);
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