<?
    namespace fret\xtrim;
 
    class Text extends _Container {
		
		private $_tagtext;

		function tagText() {return $this->_tagtext; }

        static function _new( string $id ) : _Container {
			$o = new Text($id, __CLASS__);
			$o->_tagtext = $o->tag("virtual",$id); 
			$o->setRootTag( $o->tagText() );
			$o->setInnerChildren( $o->tagText() );
			return $o;
        }

		function setText (string $text) {
			$this->_tagtext->setInnerContent($text);
			return $this;
		}
    }
?>