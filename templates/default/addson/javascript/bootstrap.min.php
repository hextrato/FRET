<? 
	//
	// this file has to be added by INCLUDE
	//
	$_version = $_ADDSON_VERSION;
	if (is_null($_version) || is_empty($_version)) $_version = "4.4.1";
	$where = $GLOBALS["FRET_TEMPLATES_HOME"].DIRECTORY_SEPARATOR."addson".DIRECTORY_SEPARATOR."bootstrap".DIRECTORY_SEPARATOR."$_version".DIRECTORY_SEPARATOR."js";
	$fileName = $where.DIRECTORY_SEPARATOR."bootstrap.min.js";
	$fileContent = file_get_contents($fileName);
	echo $fileContent;
?>