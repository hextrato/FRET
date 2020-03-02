<?
    namespace fret\xtrim;
 
    class FrameV3 extends AbstractContainer {

		private $_tagmain;
		private $_tagleft;
		private $_tagdragleft;
		private $_tagcenter;
		private $_tagright;
		private $_tagdragright;

		function tagMain() {return $this->_tagmain; }
		function tagLeft() {return $this->_tagleft; }
		function tagDragLeft() {return $this->_tagdragleft; }
		function tagCenter() {return $this->_tagcenter; }
		function tagRight() {return $this->_tagright; }
		function tagDragRight() {return $this->_tagdragright; }
		
        static function _new( string $id ) : AbstractContainer {
			//
			// $id is ignored
			//
			$id = "Fret3V";
			$o = new FrameV3 ($id, __CLASS__);
			$o->_tagmain = Tag::_new("div");
			$o->_tagmain->setClass("fret-frame3v");
			$o->_tagmain->set("id",$id);

			$o->_tagleft = Tag::_new("div");
			$o->_tagleft->setClass("fret-frame3v-left");
			$o->_tagleft->set("id",$id."Left");

			$o->_tagdragleft = Tag::_new("div");
			$o->_tagdragleft->setClass("fret-frame3v-drag-left");
			$o->_tagdragleft->set("id",$id."DragLeft");

			$o->_tagleft->add($o->_tagdragleft);
			$o->_tagleft->setInnerContentAfter("LeftSide");
			
			$o->_tagcenter = Tag::_new("div");
			$o->_tagcenter->setClass("fret-frame3v-center");
			$o->_tagcenter->set("id",$id."Center");
			$o->_tagcenter->setInnerContentAfter("CenterFrame");

			$o->_tagright = Tag::_new("div");
			$o->_tagright->setClass("fret-frame3v-right");
			$o->_tagright->set("id",$id."Right");

			$o->_tagdragright = Tag::_new("div");
			$o->_tagdragright->setClass("fret-frame3v-drag-right");
			$o->_tagdragright->set("id",$id."DragRight");

			$o->_tagright->add($o->_tagdragright);
			$o->_tagright->setInnerContentAfter("RightSide");

			$o->_tagmain
				->add ( $o->_tagleft )
				->add ( $o->_tagcenter )
				->add ( $o->_tagright )
			;
			
			$o->setRootTag( $o->tagMain() );
			$o->setInnerChildren( $o->tagCenter() );
  
			return $o;
        }

    }
?>