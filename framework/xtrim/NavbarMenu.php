<?
    namespace fret\xtrim;
 
    class NavbarMenu extends AbstractContainer {
		
		private $_tagvirtual;
		private $_tagbutton;
		private $_tagspan;
		private $_tagframe;
		private $_tagmenu;

		function tagVirtual() 	{ return $this->_tagvirtual; }
		function tagButton() 	{ return $this->_tagbutton; }
		function tagSpan() 		{ return $this->_tagspan; }
		function tagFrame() 	{ return $this->_tagframe; }
		function tagMenu() 		{ return $this->_tagmenu; }

        static function _new( string $id ) : AbstractContainer {
			$o = new NavbarMenu($id, __CLASS__);

			$o->_tagvirtual = Tag::_new("virtual");
			
			$o->setRootTag( $o->tagVirtual() );
			
			$o->_tagbutton = Tag::_new("button");
			$o->_tagbutton->setClass("navbar-toggler");
			$o->_tagbutton
				->set("type","button")
				->set("data-toggle","collapse")
				->set("data-target","#$id")
				->set("aria-controls","$id")
				->set("aria-expanded","false")
				->set("aria-label","Toggle navigation")
			;
			$o->_tagspan = Tag::_new("span");
			$o->_tagspan->setClass("navbar-toggler-icon");
			$o->_tagbutton->add($o->_tagspan);

			$o->_tagframe = Tag::_new("div");
			$o->_tagframe->set("id",$id);
			$o->_tagframe->setClass(["fret-navbar-menu","collapse","navbar-collapse"]);
		
			$o->_tagmenu = Tag::_new("ul");
			$o->_tagmenu->setClass(["navbar-nav","mr-auto"]);
			$o->_tagframe->add($o->_tagmenu);

			$o->_tagvirtual
				->add($o->_tagbutton)
				->add($o->_tagframe)
			;

			$o->setInnerChildren( $o->tagMenu() );

			return $o;
        }

    }
?>