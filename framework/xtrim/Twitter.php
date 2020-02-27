<?
    namespace fret\xtrim;
 
    class Twitter extends AbstractContainer {

		private $_tagframe;
		private $_taglink;
		private $_tagscript;

		function tagFrame() {return $this->_tagframe; }
		function tagLink() {return $this->_taglink; }
		function tagScript() {return $this->_tagscript; }
		
        static function _new( string $id ) : AbstractContainer {
			$o = new Twitter ($id, __CLASS__);
			$o->_tagframe = Tag::_new("div");
			$o->_tagframe->setClass(["inline"]);
			$o->_tagframe->set("style","border: 1px solid #ddd; margin: 8px; border-radius: 4px; margin-bottom: 10px;");
			
			$o->_taglink = Tag::_new("a");
			$o->_taglink->setClass(["twitter-timeline"]);			
			$o->_taglink->set("data-width","300");
			$o->_taglink->set("data-height","500");
			$o->_taglink->set("data-theme","light");
			$o->_taglink->set("data-link-color","#2B7BB9");
			$o->_taglink->set("href","https://twitter.com/cogcomp?ref_src=twsrc%5Etfw");
			$o->_taglink->setInnerHtml("Tweets by cogcomp");

			$o->_tagscript = Tag::_new("script");
			$o->_tagscript->set("async","");
			$o->_tagscript->set("src","https://platform.twitter.com/widgets.js");
			$o->_tagscript->set("charset","utf-8");

			$o->_tagframe->add ( $o->_taglink );
			$o->_tagframe->add ( $o->_tagscript );

			$o->setRootTag( $o->tagFrame() );
			$o->setInnerChildren( $o->tagFrame() );
  
			return $o;
        }

    }
?>