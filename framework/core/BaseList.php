<?
    namespace fret\core;
 
    class BaseList {
         
        private $_LIST = array();
         
        function __construct() {
            $this->_LIST = array();
            return $this;
        }
        
        function contains ( string $entry ) { 
			return in_array($entry,$this->_LIST);
		}

		function theList() {
			return $this->_LIST;
		}
		
        function clear ( ) { 
			$this->_LIST = array();
            return $this;
        }

        function set ( $entry ) { 
			if (is_null($entry)) {
				$this->_LIST = array();
			} else if (is_string($entry)) {
				$this->_LIST = array($entry);
			} else if (is_array($entry)) {
				$this->_LIST = $entry;
			} else {
				// do nothing
			}
            return $this;
        }

        function add ( $entry ) { 
			if (is_null($entry)) {
				// do nothing
			} else if (is_string($entry)) {
				if (!$this->contains($entry)) $this->_LIST[] = $entry;
			} else if (is_array($entry)) {
				$this->_LIST = array_unique ( array_merge ( $this->_LIST , $entry ) );
			} else {
				// do nothing
			}
            return $this;
        }
         
        function del ( string $entry ) { 
			if (is_null($entry)) {
				// do nothing
			} else if (is_string($entry)) {
				if ($this->contains($entry)) $this->_LIST = array_diff($this->_LIST, [$entry]);
			} else if (is_array($entry)) {
				$this->_LIST = array_diff($this->_LIST, $entry);
			} else {
				// do nothing
			}
            return $this;
        }

    }
?>