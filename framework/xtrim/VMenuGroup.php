<?
    namespace fret\xtrim;
 
    class VMenuGroup extends AbstractContainer {

		private $_tagdiv;
		private $_tagoption;
		private $_tagframe;

		function tagDiv() {return $this->_tagdiv; }
		function tagOption() {return $this->_tagoption; }
		function tagFrame() {return $this->_tagframe; }
		
        static function _new( string $id ) : AbstractContainer {
			$o = new VMenuGroup ($id, __CLASS__);
			$o->_tagdiv = Tag::_new("div");
			$o->_tagdiv->css()->set("fret-vmenu-group");
			$o->_tagdiv->set("id",$id);

			$o->_tagoption = Tag::_new("a");
			$o->_tagoption->set("href","javascript:fretShowHide('".$id."Frame"."');");
			// $o->_tagoption->set("id",$id);

			$o->_tagframe = Tag::_new("div");
			$o->_tagframe->css()->set("fret-vmenu-group-frame");
			$o->_tagframe->set("id",$id."Frame");

			$o->_tagdiv->add($o->_tagoption);
			$o->_tagdiv->add($o->_tagframe);

			$o->setRootTag( $o->tagDiv() );
			$o->setInnerChildren( $o->tagFrame() );
  
			return $o;
        }
		
		function setOption( string $option ) {
			$this->tagOption()->setInnerHtml($option);
			return $this;
		}

		function hide( ) {
			$this->tagFrame()->set("style","display:none");
			return $this;
		}
	
    }
?>