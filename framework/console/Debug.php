<?
    namespace fret\console;
 
    class Debug {
        static private $fullDebugFile = "";
        static private $flagOutputStatus = false;
        static function turnOn():void { self::$flagOutputStatus = true; }
        static function turnOff():void { self::$flagOutputStatus = false; }
        static function setFileName(string $filename):void { self::$fullLogFile = $fileName; }
        static function write (string $line):void {
            if (self::$flagOutputStatus) {
                if (self::$fullDebugFile <> "") {
                    $f = fopen(self::$fullLogFile,"a+");
                    fputs($f,date("d/m/Y h:i:s")." $line\r\n");
                    fclose ($f);
                } else {
                    \huebby\system\Output::write('Degub :: '.date("Y/m/d h:i:s").' :: '.$line);
                }
            }
        }
    }
?>