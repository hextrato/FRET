<?
    namespace fret\xtrim;
 
    class FrameV2 extends _Container {

		private $_tagframe;
		private $_tagleft;
		private $_tagright;

		function tagFrame() {return $this->_tagframe; }
		function tagLeft() {return $this->_tagleft; }
		function tagRight() {return $this->_tagright; }

		function left() {return $this->_tagleft; }
		function right() {return $this->_tagright; }
		
        static function _new( string $id ) : _Container {
			//
			// $id is ignored
			//
			$id = "Fret2V";
			$o = new FrameV2 ($id, __CLASS__);
			$o->_tagframe = $o->tag("div"); // Tag::_new("div");
			$o->_tagframe->setClass("fret-frame2v");
			$o->_tagframe->set("id",$id);

			$o->_tagleft = $o->tag("div"); // Tag::_new("div");
			$o->_tagleft->setClass("fret-frame2v-left");
			$o->_tagleft->set("id",$id."Left");

			$o->_tagright = $o->tag("div"); // Tag::_new("div");
			$o->_tagright->setClass("fret-frame2v-right");
			$o->_tagright->set("id",$id."Right");

			$o->_tagframe
				->add ( $o->_tagleft )
				->add ( $o->_tagright )
			;
			
			$o->setRootTag( $o->tagFrame() );
			$o->setInnerChildren( $o->tagLeft() );
  
			return $o;
        }

    }
?>