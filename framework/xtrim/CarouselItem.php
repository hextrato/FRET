<?
    namespace fret\xtrim;
 
    class CarouselItem extends AbstractContainer {

		private $_tagframe;
		private $_tagcaption;
		private $_tagimage;

		function tagFrame() {return $this->_tagframe; }
		function tagCaption() {return $this->_tagcaption; }
		function tagImage() {return $this->_tagimage; }
		
        static function _new( string $id ) : AbstractContainer {
			$o = new CarouselItem ($id, __CLASS__);

			$o->_tagframe = Tag::_new("div",$id);
			$o->_tagframe->setClass(["carousel-item"]);
			$o->_tagframe->set("data-interval","5000");

			$o->_tagcaption = Tag::_new("div");
			$o->_tagcaption->setClass(["carousel-caption"]);

			$o->_tagimage = Tag::_new("img");
			
			$o->_tagframe->add($o->_tagimage);
			$o->_tagframe->add($o->_tagcaption);

			$o->setRootTag( $o->tagFrame() );
			$o->setInnerChildren( $o->tagFrame() );
  
			return $o;
        }

		/*
		function setCaption ($caption) {
			$this->_tagcaption->setInnerContent($caption);
			return $this;
		}

		function setURL ($url) {
			$this->_tagframe->set("data-link",$url);
			return $this;
		}
		*/

		function setImage ($image) {
			// $this->_tagframe->set("style","background-image: url($image);");
			$this->_tagimage->set("src",$image);
			return $this;
		}
    }
?>