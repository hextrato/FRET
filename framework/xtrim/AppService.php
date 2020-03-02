<?
    namespace fret\xtrim;
 
    class AppService extends AbstractContainer {
		
		private $_taghtml;
		private $_taghead;
		private $_tagmeta;
		private $_tagtitle;
		private $_taglink;
		private $_tagscript;
		private $_tagbody;
		
		private $_LAST_LINK = null;
		private $_LAST_SCRIPT = null;
		
		function tagHtml() 		{return $this->_taghtml; }
		function tagHead() 		{return $this->_taghead; }
		function tagMeta() 		{return $this->_tagmeta; }
		function tagLink() 		{return $this->_taglink; }
		function tagScript() 	{return $this->_tagscript; }
		function tagTitle() 	{return $this->_tagtitle; }
		function tagBody() 		{return $this->_tagbody; }

		
		function setTitle ($title) {
			$this->_tagtitle->setInnerHtml($title);
			return $this;
		}

		function addMeta ( $arrayProps ) {
			$h = Tag::_new("meta");
			foreach($arrayProps as $prop => $value ) $h->set($prop,$value);
			$this->_tagmeta->add($h);
			return $this;
		}

		function addLink ( $href , $rel = "", $type = "" ) {
			$h = Tag::_new("link")->set("href",$href);
			if ($rel <> "") $h->set("rel",$rel);
			if ($type <> "") $h->set("type",$type);
			$this->_taglink->add($h);
			$this->_LAST_LINK = $h;
			return $this;
		}
		
		function setLink($prop,$value) {
			if (! $this->_LAST_LINK == null)
				$this->_LAST_LINK->set($prop,$value);
			return $this;
		}
		
		function addScript ( $src , $charset = "" ) {
			$h = Tag::_new("script")->set("src",$src);
			if ($charset <> "") $h->set("charset",$charset);
			$this->_tagscript->add($h);
			$this->_LAST_SCRIPT = $h;
			return $this;
		}
		
		function setScript($prop,$value) {
			if (! $this->_LAST_SCRIPT == null)
				$this->_LAST_SCRIPT->set($prop,$value);
			return $this;
		}
		
		function setClass( string $css ) {
			parent::setClass( $css );
			$this->_tagbody->setClass( $css."_".ucfirst($this->_tagbody->getTAG()) );
			return $this;
		}
		
        static function _new( string $id ) : AbstractContainer {
			$o = new AppService($id, __CLASS__);

			$o->_taghtml 	= Tag::_new("html");
			$o->_taghead 	= Tag::_new("head");
			$o->_tagmeta 	= Tag::_new("virtual");
			$o->_tagtitle 	= Tag::_new("title");
			$o->_taglink 	= Tag::_new("virtual");
			$o->_tagscript 	= Tag::_new("virtual");
			$o->_tagbody 	= Tag::_new("body");

			$o->setInnerChildren( $o->tagBody() );
			
			$o->_taghtml
				-> add ( 
					$o->_taghead
					->add ( $o->_tagmeta )
					->add ( $o->_tagtitle )
					->add ( $o->_taglink )
					->add ( $o->_tagscript )
				)
				-> add ( 
					$o->_tagbody 
				)
			;
			
			$o->setRootTag( $o->_taghtml );

			return $o;
        }


    }
?>