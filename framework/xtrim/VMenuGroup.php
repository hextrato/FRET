<?
    namespace fret\xtrim;
 
    class VMenuGroup extends _Container {

		private $_tagdiv;
		private $_tagoption;
		private $_tagframe;
		
		private $_ALLOW_HIDE = true;

		function tagDiv() {return $this->_tagdiv; }
		function tagOption() {return $this->_tagoption; }
		function tagFrame() {return $this->_tagframe; }
		
        static function _new( string $id ) : _Container {
			$o = new VMenuGroup ($id, __CLASS__);
			$o->_tagdiv = $o->tag("div"); // Tag::_new("div");
			$o->_tagdiv->setClass("fret-vmenu-group");
			$o->_tagdiv->set("id",$id);

			$o->_tagoption = $o->tag("a"); // Tag::_new("a");
			$o->enableHide(); // _tagoption->set("href","javascript:fretShowHide('".$id."Frame"."');");
			// $o->_tagoption->set("id",$id);

			$o->_tagframe = $o->tag("div"); // Tag::_new("div");
			$o->_tagframe->setClass("fret-vmenu-group-frame");
			$o->_tagframe->set("id",$id."Frame");

			$o->_tagdiv->add($o->_tagoption);
			$o->_tagdiv->add($o->_tagframe);

			$o->setRootTag( $o->tagDiv() );
			$o->setInnerChildren( $o->tagFrame() );
  
			return $o;
        }
		
		function setOption( string $option ) {
			$this->tagOption()->setInnerContent($option);
			return $this;
		}

		function hide( ) {
			$this->tagFrame()->set("style","display:none");
			return $this;
		}

		function disableHide( ) {
			$this->_tagoption->set("href","javascript:fretShowHide(null);");
			return $this;
		}

		function enableHide( ) {
			$this->_tagoption->set("href","javascript:fretShowHide('".$id."Frame"."');");
			return $this;
		}
	
    }
?>