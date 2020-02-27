<?
    namespace fret\console;
 
    class Log {
        
		static private $fullLogFile = "fret.log";
        static public $flagOutputStatus = false;
		
        static function turnOn():void { 
			self::$flagOutputStatus = true; 
		}
        static function turnOff():void { 
			self::$flagOutputStatus = false; 
		}
        static function setFileName(string $filename):void { 
			self::$fullLogFile = $fileName; 
		}
        static function write (string $line):void {
            if (self::$flagOutputStatus) {
                $f = fopen(self::$fullLogFile,"a+");
                @fputs($f,date("Y/m/d h:i:s")." $line\r\n");
                @fclose ($f);
            }
        }
    }
?>