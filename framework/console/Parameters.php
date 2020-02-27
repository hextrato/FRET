<?
    namespace fret\console;
 
    class Parameters {
        private static $systemParameters = array();
        static function set(string $parameter,string $value):void { self::$systemParameters[$parameter] = $value; }
        static function all():array { return self::$systemParameters; }
        static function get(string $parameter):string { 
            if (array_key_exists($parameter, self::$systemParameters)) {
                if (self::$systemParameters[$parameter] == NULL)
                    return "";
                else
                    return self::$systemParameters[$parameter];
            } else {
                return "";
            }
        }
    }
?>