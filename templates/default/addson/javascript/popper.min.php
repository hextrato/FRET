<? 
	//
	// this file has to be added by INCLUDE
	//
	$_version = $_ADDSON_VERSION;
	if (is_null($_version) || is_empty($_version)) $_version = "1.16.0";
	$where = $GLOBALS["FRET_TEMPLATES_HOME"].DIRECTORY_SEPARATOR."addson".DIRECTORY_SEPARATOR."popper".DIRECTORY_SEPARATOR."$_version";
	$fileName = $where.DIRECTORY_SEPARATOR."popper.min.js";
	$fileContent = file_get_contents($fileName);
	echo $fileContent;
?>