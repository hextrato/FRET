<?
    namespace fret\xtrim;
 
    class FrameV2 extends AbstractContainer {

		private $_tagmain;
		private $_tagleft;
		private $_tagright;

		function tagMain() {return $this->_tagmain; }
		function tagLeft() {return $this->_tagleft; }
		function tagRight() {return $this->_tagright; }

		function left() {return $this->_tagleft; }
		function right() {return $this->_tagright; }
		
        static function _new( string $id ) : AbstractContainer {
			//
			// $id is ignored
			//
			$id = "Fret2V";
			$o = new FrameV2 ($id, __CLASS__);
			$o->_tagmain = Tag::_new("div");
			$o->_tagmain->setClass("fret-frame2v");
			$o->_tagmain->set("id",$id);

			$o->_tagleft = Tag::_new("div");
			$o->_tagleft->setClass("fret-frame2v-left");
			$o->_tagleft->set("id",$id."Left");

			$o->_tagright = Tag::_new("div");
			$o->_tagright->setClass("fret-frame2v-right");
			$o->_tagright->set("id",$id."Right");

			$o->_tagmain
				->add ( $o->_tagleft )
				->add ( $o->_tagright )
			;
			
			$o->setRootTag( $o->tagMain() );
			$o->setInnerChildren( $o->tagLeft() );
  
			return $o;
        }

    }
?>