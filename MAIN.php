<?
    namespace fret;
 
    // *****************************************************************************************
    // *  A [Fr]amework of [E]ssential [T]ools for designing information systems Web intefaces *
    // *****************************************************************************************
 
    function _doAutoLoad($classname) {
		// if (substr($classname,0,5)=="fret\\") $classname = substr($classname,5);
        // require_once __DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . $classname . ".php";
		$classname = str_replace("fret".DIRECTORY_SEPARATOR,"framework".DIRECTORY_SEPARATOR,$classname);
		require_once __DIR__ . DIRECTORY_SEPARATOR . $classname . ".php";
    }
     
    function timestamp() {
        \fret\console\Output::write('\fret\timespamp()');
    }
 
    function init() {
        \fret\console\Log::turnOff();
        \fret\console\Debug::turnOff();
        \fret\console\Output::turnOff();
        \fret\console\Output::setTimeOn();
        \fret\console\Parameters::set("FRET:CONSOLE:BASE_DIR",__DIR__ . DIRECTORY_SEPARATOR . "fret");
    }
?>