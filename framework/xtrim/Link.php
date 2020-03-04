<?
    namespace fret\xtrim;
 
    class Link extends _Container {
		
		private $_taglink;

		function tagLink() {return $this->_taglink; }

        static function _new( string $id ) : _Container {
			$o = new Link($id, __CLASS__);
			$o->_taglink = $o->tag("a"); // Tag::_new("a",$id);
			$o->_taglink->setClass("fret-link");
			$o->setRootTag( $o->_taglink );
			$o->setInnerChildren( $o->_taglink );
			return $o;
        }

		function setURL (string $url) {
			$this->_taglink->set("href",$url);
			return $this;
		}
		function setCaption (string $caption) {
			$this->_taglink->setInnerContent($caption);
			return $this;
		}
    }
?>