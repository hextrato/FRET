<?
    namespace fret\xtrim;
 
    class VMenuOption extends _Container {

		private $_tagdiv;
		private $_tagoption;

		function tagDiv() {return $this->_tagdiv; }
		function tagOption() {return $this->_tagoption; }
		
        static function _new( string $id ) : _Container {
			$o = new VMenuOption ($id, __CLASS__);
			
			$o->_tagdiv = $o->tag("div"); // Tag::_new("div");
			$o->_tagdiv->setClass("fret-vmenu-option");
			$o->_tagdiv->set("id",$id);

			$o->_tagoption = $o->tag("a"); // Tag::_new("a");
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