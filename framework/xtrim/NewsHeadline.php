<?
    namespace fret\xtrim;
 
    class NewsHeadline extends _Container {

		private $_tagframe;
		private $_tagimage;
		private $_taghline;
		private $_tagtitle;
		private $_tagintro;

		function tagFrame() {return $this->_tagframe; }
		function tagImage() {return $this->_tagimage; }
		function tagHline() {return $this->_taghline; }
		function tagTitle() {return $this->_tagtitle; }
		function tagIntro() {return $this->_tagintro; }
		
        static function _new( string $id ) : _Container {
			$o = new NewsHeadline ($id, __CLASS__);
			$o->_tagframe = $o->tag("div"); // Tag::_new("div");
			$o->_tagframe->setClass(["inline","top"]);
			$o->_tagframe->set("style","border: 0px solid #ddd; border-radius: 4px; margin: 32px; width: 30%; vertical-align: top; display: inline;");
			
			$o->setRootTag( $o->tagFrame() );
			$o->setInnerChildren( $o->tagFrame() );

			$o->_tagimage = $o->tag("img") // Tag::_new("img")
				->set("src",$GLOBALS["BASE_APP_RELATIVE_PATH"]."_img/icon_news.png")
				->set("width","32px")
			;

			$o->_tagtitle = $o->tag("virtual") // Tag::_new("virtual")
				->setInnerContent("Headline")
			;

			$o->_taghline = $o->tag("h5") // Tag::_new("h5")
				->setInnerContent("")
				->add($o->_tagimage)
				->add($o->_tagtitle)
			;

			$o->_tagintro = $o->tag("p") // Tag::_new("p")
				->setInnerContent("Intro...")
			;

			$o->_tagframe
				->add($o->_taghline)
				// ->add($o->_tagimage)
				->add($o->_tagintro)
			;
			
			return $o;
        }

		function setTitle($title) {
			$this->tagTitle()->setInnerContent($title);
			return $this;
		}
		function setIntro($intro) {
			$this->tagIntro()->setInnerContent($intro);
			return $this;
		}
    }
?>