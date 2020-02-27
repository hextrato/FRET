<?
    namespace fret\core;
 
    class BaseProps {
         
        private $_PROPS = array();

        function __construct() {
            $this->_PROPS = array();
            return $this;
        }

		function props() {
			return $this->_PROPS;
		}
		
        function set ( string $property , string $value ) { 
            $this->_PROPS[$property] = $value; 
            return $this;
        }
         
        function get ( string $property ) : string { 
            if (array_key_exists($property, $this->_PROPS)) 
                return $this->_PROPS[$property];
            else
                return "";
        }
 
    }
?>