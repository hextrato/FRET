<?
    namespace fret\console;
 
    class Exception extends \Exception {
		
		private $_MESSAGE = "";
		private $_ERRCODE = 0;
		
        function __construct (string $message = "" , int $errcode = 0 , \Exception $previous = NULL) {
            parent::__construct(/*"huebby.system.Exception: ".*/$message, $code, $previous);
			$this->_MESSAGE = $message;
			$this->_ERRCODE = $errcode;
            \fret\console\Log::write($this->getMessage());
        }
		
		function getErrCode() : int {
			return $this->_ERRCODE;
		}

		function getErrMsgs() : string {
			return $this->_MESSAGE;
		}
	}
?>