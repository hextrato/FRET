<?
	//
	// INIT FWS
	//
	
	if ($GLOBALS["BASE_APP_RELATIVE_PATH"] == "") $GLOBALS["BASE_APP_RELATIVE_PATH"] = "../";
	$_BASE_ = $GLOBALS["BASE_APP_RELATIVE_PATH"];
	
    require_once($_BASE_."_app".DIRECTORY_SEPARATOR."APP_MAIN.php");

	//
	// PAGE
	//
	
	// ... 
	
	//
	// SHOW FWS
	//
	
	$FWS->show();
?>
