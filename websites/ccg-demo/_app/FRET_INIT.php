<?
    // ================================
    // PARAMETERS
    // ================================

	// $GLOBALS["BASE_APP_RELATIVE_PATH"] => // MUST BE DEFINED AT THE BEGINNING OF EACH MAIN APP SERVICE
	// var_dump($GLOBALS["BASE_APP_RELATIVE_PATH"]);
    $GLOBALS["FRET_HOME"] = $GLOBALS["BASE_APP_RELATIVE_PATH"]."..".DIRECTORY_SEPARATOR."..";
    $GLOBALS["FRET_FRAMEWORK_HOME"] = $GLOBALS["FRET_HOME"].DIRECTORY_SEPARATOR."framework";
    $GLOBALS["FRET_TEMPLATES_HOME"] = $GLOBALS["FRET_HOME"].DIRECTORY_SEPARATOR."templates";
	$GLOBALS["FRET_TEMPLATE"] = "default";
	$GLOBALS["FRET_TEMPLATE_PATH"] = $GLOBALS["FRET_TEMPLATES_HOME"].DIRECTORY_SEPARATOR.$GLOBALS["FRET_TEMPLATE"];
    $GLOBALS["NERV_FRAMEWORK_HOME"] = $GLOBALS["FRET_HOME"].DIRECTORY_SEPARATOR."nerv";
	
    // ================================
    // AUTOLOAD
    // ================================
	
	function __autoload($classname) {

		$targetClass = str_replace("\\", DIRECTORY_SEPARATOR, $classname);

		if (
			// FRET
			(substr($targetClass,0,strlen("fret".DIRECTORY_SEPARATOR))) == ("fret".DIRECTORY_SEPARATOR) 
			OR
			// NerveTattoo
			(substr($targetClass,0,strlen("nerve".DIRECTORY_SEPARATOR))) == ("nerve".DIRECTORY_SEPARATOR) 
		) {
			\fret\_doAutoLoad($targetClass);
		}

		//
		// TO BE DELETED ?
		//

		/*
		// App specific
		if (
			(substr($targetClass,0,strlen("app".DIRECTORY_SEPARATOR))) == ("app".DIRECTORY_SEPARATOR) or
			(substr($targetClass,0,strlen("app".DIRECTORY_SEPARATOR))) == (DIRECTORY_SEPARATOR."app".DIRECTORY_SEPARATOR)
		) {
			$targetClass = str_replace("app\\","cogstack-trials\\",$targetClass);
			\huebby\_doAutoLoad( "..".DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."cogstack-trials".DIRECTORY_SEPARATOR.$targetClass );
		}
		*/
    }

    // ================================
    // MAIN
    // ================================

	require_once ($GLOBALS["FRET_HOME"].DIRECTORY_SEPARATOR."MAIN.php");
	\fret\init();


?>
