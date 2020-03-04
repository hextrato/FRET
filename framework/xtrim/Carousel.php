<?
    namespace fret\xtrim;
 
    class Carousel extends _Container {

		private $_tagframe;
		private $_tagindic;
		private $_taginner;
		private $_tagcontrolleft;
		private $_tagcontrolright;

		private $_noIndicItems = 0;

		function tagFrame() {return $this->_tagframe; }
		function tagInner() {return $this->_taginner; }
		
        static function _new( string $id ) : _Container {
			$o = new Carousel ($id, __CLASS__);

			$o->_tagframe = $o->tag("div",$id); // Tag::_new("div",$id);
			$o->_tagframe->setClass(["carousel","slide","carousel-fade"]);
			$o->_tagframe->set("data-ride","carousel");
			//$o->_tagframe->set("style","height:128px;");

			$o->_taginner = $o->tag("div"); // Tag::_new("div");
			$o->_taginner->setClass(["carousel-inner"]);

			$o->_tagindic = $o->tag("ol"); // Tag::_new("ol");
			$o->_tagindic->setClass(["carousel-indicators"]);

			$o->_tagcontrolleft = $o->tag("a"); // Tag::_new("a");
			$o->_tagcontrolleft->set("href","#$id");
			$o->_tagcontrolleft->set("role","button");
			$o->_tagcontrolleft->set("data-slide","prev");
			$o->_tagcontrolleft->setTemplate("Fully");
			$o->_tagcontrolleft->setClass(["data-slide","carousel-control-prev"]);
			$o->_tagcontrolleft
				->add(
					$o->tag("span") // Tag::_new("span")
						->setClass(["carousel-control-prev-icon"])
						//->set("aria-hidden","true")
				)
				->add(
					$o->tag("span") // Tag::_new("span")
						->setClass(["sr-only"])
						->setInnerContent("Previous")
				)
			;

			$o->_tagcontrolright = $o->tag("a"); // Tag::_new("a");
			$o->_tagcontrolright->set("href","#$id");
			$o->_tagcontrolright->set("role","button");
			$o->_tagcontrolright->set("data-slide","next");
			$o->_tagcontrolright->setTemplate("Fully");
			$o->_tagcontrolright->setClass(["data-slide","carousel-control-next"]);
			$o->_tagcontrolright
				->add(
					$o->tag("span") // Tag::_new("span")
						// ->setClass(["carousel-control-next-icon"])
						->setClass(["carousel-control-next-icon"])
						//->set("aria-hidden","true")
				)
				->add(
					$o->tag("span") // Tag::_new("span")
						->setClass(["sr-only"])
						//->setInnerContent("Next")
				)
			;

			$o->_tagframe->add($o->_tagindic);
			$o->_tagframe->add($o->_taginner);
			$o->_tagframe->add($o->_tagcontrolleft);
			$o->_tagframe->add($o->_tagcontrolright);

			$o->setRootTag( $o->tagFrame() );
			$o->setInnerChildren( $o->tagInner() );
  
			return $o;
        }

		function addItem($item) {
			if (substr(get_class($item), -strlen('fret\xtrim\CarouselItem')) === 'fret\xtrim\CarouselItem') {
				$i = $this->_noIndicItems;
				$this->_theIndicItems[$i] = $this->tag("li"); // Tag::_new("li");
				$this->_theIndicItems[$i]->set("data-target","#$id");
				$this->_theIndicItems[$i]->set("data-slide-to","$i");
				$this->_theIndicItems[$i]->setTemplate("Linea");
				if ($i == 0) $this->_theIndicItems[$i]->setClass(["active"]);
				$this->_tagindic->add( $this->_theIndicItems[$i] );
				$this->add($item);
				$this->_noIndicItems++;
			} else {
				// NEEDS AN EXCEPTION HERE
				var_dump($item);
			}
			return $this;
		}
			
    }
?>	