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
	
	// ... TESTE REPARENTING TAGs
	
	/*
	
	$ul1 = \fret\xtrim\Tag::_new("ul");
	$li1 = \fret\xtrim\Tag::_new("li")
				->add (
					\fret\xtrim\Tag::_new("a")
						->setInnerContent("Software")
						->set("href",$_BASE_."Software/")
				);
				
	$li2 = \fret\xtrim\Tag::_new("li")
				->add (
					\fret\xtrim\Tag::_new("a")
						->setInnerContent("Demos")
						->set("href",$_BASE_."Demos/")
				);

	$ul1 -> add ($li1);
	$ul1 -> add ($li2);

	$ul1->show();

	echo "<hr>";

	$ul2 = \fret\xtrim\Tag::_new("ul");
	$ul2 -> add ($li1);

	$ul2->show();

	echo "<hr>";

	$ul1->show();
	
	*/
	
	//
	// SHOW FWS
	//
	
	$FWS->show();
	
	
?>
