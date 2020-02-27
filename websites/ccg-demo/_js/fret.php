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

	$cssFileName = $GLOBALS["FRET_TEMPLATE_PATH"].DIRECTORY_SEPARATOR."javascript".DIRECTORY_SEPARATOR."fret.js";
	$cssContent = file_get_contents($cssFileName);
	echo $cssContent;
?>