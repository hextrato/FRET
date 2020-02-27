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
			if (is_array($entry))
				$this->_LIST = $entry;
			else {
				$this->_LIST = array($entry);
			}
            return $this;
        }

        function add ( $entry ) { 
			if (is_array($entry))
				$this->_LIST = array_unique ( array_merge ( $this->_LIST , $entry ) );
			else
			if ( ! $this->contains($entry) )
				$this->_LIST[] = $value; 
            return $this;
        }
         
        function del ( string $entry ) { 
            $this->_LIST = array_diff($this->_LIST, [$entry]);
            return $this;
        }

    }
?>