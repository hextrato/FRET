<?
    namespace fret\xtrim;
 
    class Image extends AbstractContainer {
		
		private $_tagimage;

		function tagImage() {return $this->_tagimage; }

        static function _new( string $id ) : AbstractContainer {
			$o = new Image($id, __CLASS__);
			$o->_tagimage = Tag::_new("img");
			$o->_tagimage->setClass("fret-image");
			$o->setRootTag( $o->_tagimage );
			return $o;
        }

		function setSource (string $source) {
			$this->_tagimage->set("src",$source);
			return $this;
		}
    }
?>