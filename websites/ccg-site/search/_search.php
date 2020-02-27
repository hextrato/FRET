<?
	if ($GLOBALS["BASE_APP_RELATIVE_PATH"] == "") $GLOBALS["BASE_APP_RELATIVE_PATH"] = "../";
	$_BASE_ = $GLOBALS["BASE_APP_RELATIVE_PATH"];

    require_once($_BASE_."_app".DIRECTORY_SEPARATOR."APP_MAIN.php");

	$FWS->add ( \fret\xtrim\TitleH2::_new("appMainTitle")->setTitle("Searching '" . $_POST["appMainNavbarSearch"] . "'...") );

	$appSearch = \fret\xtrim\Infobox::_new("appMainInfobox");
	$appSearch->tagFrame()
		/*
		->add (
			\fret\xtrim\Tag::_new("h3")
				->setInnerHtml("Searching for: '" . $_POST["appMainNavbarSearch"] . "'") 
		)
		*/
		->add (
			\fret\xtrim\Tag::_new("p")
				->setInnerHtml("Under construction...")
		)
	;
	$FWS->add ( $appSearch );
	
	$FWS->show();
?>
