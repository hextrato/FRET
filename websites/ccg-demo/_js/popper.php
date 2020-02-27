<? 
	//
	// INIT FRET
	//

    $GLOBALS["BASE_APP_RELATIVE_PATH"] = "../";
	$_BASE_ = $GLOBALS["BASE_APP_RELATIVE_PATH"];
    require_once($_BASE_."_app".DIRECTORY_SEPARATOR."FRET_INIT.php");

	//
	// LOAD CSS
	//

	// $_ADDSON_VERSION = ""; // DEFAULT
	$cssFileName = $GLOBALS["FRET_TEMPLATE_PATH"].DIRECTORY_SEPARATOR."addson".DIRECTORY_SEPARATOR."javascript".DIRECTORY_SEPARATOR."popper.min.php";
	include_once $cssFileName;
?>