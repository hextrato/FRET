<?
    namespace fret\core;
 
    class BaseProps {
         
        private $_CASE_SENSITIVE = false;

        private $_PROPS = array();

        function __construct() {
            $this->_PROPS = array();
            return $this;
        }

		function props() {
			return $this->_PROPS;
		}
		
        function set ( string $property , string $value ) { 
			if (!$this->_CASE_SENSITIVE) $property = strtolower($property);
            $this->_PROPS[$property] = $value; 
            return $this;
        }
         
        function get ( string $property ) : string { 
			if (!$this->_CASE_SENSITIVE) $property = strtolower($property);
            if (array_key_exists($property, $this->_PROPS)) 
                return $this->_PROPS[$property];
            else
                return "";
        }
 
    }
?>