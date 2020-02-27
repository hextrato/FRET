<?
    namespace fret\xtrim;
 
    class Link extends AbstractContainer {
		
		private $_taglink;

		function tagLink() {return $this->_taglink; }

        static function _new( string $id ) : AbstractContainer {
			$o = new Link($id, __CLASS__);
			$o->_taglink = Tag::_new("a",$id);
			$o->_taglink->css()->set("fret-link");
			$o->setRootTag( $o->_taglink );
			$o->setInnerChildren( $o->_taglink );
			return $o;
        }

		function setURL (string $url) {
			$this->_taglink->set("href",$url);
			return $this;
		}
		function setCaption (string $caption) {
			$this->_taglink->setInnerHtml($caption);
			return $this;
		}
    }
?>