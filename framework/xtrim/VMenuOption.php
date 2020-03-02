<?
    namespace fret\xtrim;
 
    class VMenuOption extends AbstractContainer {

		private $_tagdiv;
		private $_tagoption;

		function tagDiv() {return $this->_tagdiv; }
		function tagOption() {return $this->_tagoption; }
		
        static function _new( string $id ) : AbstractContainer {
			$o = new VMenuOption ($id, __CLASS__);
			$o->_tagdiv = Tag::_new("div");
			$o->_tagdiv->setClass("fret-vmenu-option");
			$o->_tagdiv->set("id",$id);

			$o->_tagoption = Tag::_new("a");
			// $o->_tagoption->set("id",$id);

			$o->_tagdiv->add($o->_tagoption);

			$o->setRootTag( $o->tagDiv() );
			$o->setInnerChildren( $o->tagDiv() );
  
			return $o;
        }
		
		function setOption( string $option ) {
			$this->tagOption()->setInnerContent($option);
			return $this;
		}

		function setLink( string $url ) {
			$this->tagOption()->set("href",$url);
			return $this;
		}

		function setTarget( string $target ) {
			$this->tagOption()->set("target",$target);
			return $this;
		}

    }
?>