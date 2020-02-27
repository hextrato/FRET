<?
    namespace fret\console;
 
    class Output {
        static private $fullOutputFile = "";
        static private $flagOutputStatus = false;
        static private $flagOutputTime = false;
        static function turnOn():void { self::$flagOutputStatus = true; }
        static function turnOff():void { self::$flagOutputStatus = false; }
        static function setTimeOn():void { self::$flagOutputTime = true; }
        static function setTimeOff():void { self::$flagOutputTime = false; }
        static function setFileName(string $filename):void { self::$fullOutputFile = $fileName; }
        static function write (string $line):void {
            if (self::$flagOutputStatus) {
                if (self::$fullOutputFile == "") {
                    if (self::$flagOutputTime) 
                        echo date("Y/m/d h:i:s")." $line\n";
                    else
                        echo "$line\n";
                } else {
                    $f = fopen(self::$fullOutputFile,"a+");
                    if (self::$flagOutputTime) 
                        fputs($f,date("Y/m/d h:i:s")." $line\n");
                    else
                        fputs($f,"$line\n");
                    fclose ($f);
                }
            }
        }
    }
?>