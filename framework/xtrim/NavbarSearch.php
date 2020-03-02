<?
    namespace fret\xtrim;
 
    class NavbarSearch extends AbstractContainer {
		
		private $_tagform;
		private $_taginput;
		private $_tagbutton;

		function tagForm() {return $this->_tagform; }
		function tagInput() {return $this->_taginput; }
		function tagButton() {return $this->_tagbutton; }
		
        static function _new( string $id ) : AbstractContainer {
			$o = new NavbarSearch($id, __CLASS__);
		
			$o->_tagform = Tag::_new("form");
			$o->_tagform->setClass(["fret-navbar-search-form","form-inline","my-2","my-lg-0"]);
			$o->_tagform
				->set("method","post")
			;
			$o->_taginput = Tag::_new("input");
			$o->_taginput->setClass(["form-control","mr-sm-2"]);
			$o->_taginput
				->set("type","search")
				->set("placeholder","Search")
				->set("aria-label","Search")
				->set("id",$id)
				->set("name",$id)
			;

			$o->_tagbutton = Tag::_new("button");
			$o->_tagbutton->setClass(["btn","btn-outline-success","my-2","my-sm-0"]);
			$o->_tagbutton
				->set("type","submit")
				->setInnerHtml("Search")
			;
			
			$o->_tagform->add($o->_taginput);
			$o->_tagform->add($o->_tagbutton);

			$o->setRootTag( $o->tagForm() );
			
			return $o;
        }

    }
?>