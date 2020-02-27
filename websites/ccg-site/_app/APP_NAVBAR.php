<?
	$appMainNavbar = \fret\xtrim\Navbar::_new("appMainNavbar");

	// $appMainNavbar->qnav()->set("style","border:5px;");
	
	// $appMainTopTitle = \fret\xtrim\TopTitle::_new("appMainTopTitle")->setInnerHtml("CCG");

	// $appMainTopTitleLink = \fret\xtrim\Link::_new("appMainTopLogoLink");
	// $appMainTopTitleLink->setURL("/");
	// THIS
	// $appMainTopTitleLink->setCaption("Cognitive Computational Group");
	// OR
	// $appMainTopTitleLink->add($appMainTopTitle);

	$appMainTopLogo = \fret\xtrim\Image::_new("appMainTopLogo");
	$appMainTopLogo->setSource($_BASE_."_img/ccg-logo.png");
	$appMainTopLogo->tagImage()->set("width","64px");

	$appMainTopLogoLink = \fret\xtrim\Link::_new("appMainTopLogoLink");
	$appMainTopLogoLink->setURL($_BASE_);
	$appMainTopLogoLink->add($appMainTopLogo);
	$appMainTopLogoLink->tagLink()->css()->add(["navbar-brand"]);
	
	$appMainNavbarMenu = \fret\xtrim\NavbarMenu::_new("appMainNavbarMenu");
	$appMainNavbarMenu
		->add (
			\fret\xtrim\NavbarOption::_new("appMainNavbarOptionHome")
			->setCaption("Home")
			->setURL($_BASE_) // ."Home/")
		)
		->add (
			\fret\xtrim\NavbarOption::_new("appMainNavbarOptionNews")
			->setCaption("News")
			->setURL($_BASE_."News/")
		)
		->add (
			\fret\xtrim\NavbarDropdown::_new("appMainNavbarOptionResearch")
			->setCaption("Research")
			//->setURL("#")
			->addOption("Themes",$_BASE_."research/themes/")
			->addOption("Projects",$_BASE_."research/projects/")
			->addOption("Funding",$_BASE_."research/funding/")
			->addDivider()
			->addOption("Past Projects",$_BASE_."research/past/")
		)
		->add (
			\fret\xtrim\NavbarOption::_new("appMainNavbarOptionPeople")
			->setCaption("People")
			->setURL($_BASE_."People/")
		)
		->add (
			\fret\xtrim\NavbarDropdown::_new("appMainNavbarOptionSoftware")
			->setCaption("Software")
			//->setURL("#")
			->addOption("Packages",$_BASE_."software/packages/")
			->addOption("Tools",$_BASE_."software/tools/")
		)
		->add (
			\fret\xtrim\NavbarOption::_new("appMainNavbarOptionDemos")
			->setCaption("Demos")
			->setURL($_BASE_."Demos/")
		)
		->add (
			\fret\xtrim\NavbarOption::_new("appMainNavbarOptionPublications")
			->setCaption("Publications")
			->setURL($_BASE_."Publications/")
		)
		->add (
			\fret\xtrim\NavbarDropdown::_new("appMainNavbarOptionResources")
			->setCaption("Resources")
			//->setURL("#")
			->addOption("Corpora",$_BASE_."resource/corpora/")
			->addOption("Data",$_BASE_."resource/data/")
		)
		->add (
			\fret\xtrim\NavbarDropdown::_new("appMainNavbarOptionSchedule")
			->setCaption("Schedule")
			//->setURL("#")
			->addOption("Reading Group",$_BASE_."schedule/readgroup")
			->addOption("Conferences",$_BASE_."schedule/conferences")
		)
	;

	$appMainNavbarSearch = \fret\xtrim\NavbarSearch::_new("appMainNavbarSearch");
	$appMainNavbarMenu->tagFrame()->add($appMainNavbarSearch->tagForm());
	$appMainNavbarSearch->tagForm()->set("action",$_BASE_."search/");
	
	$appMainNavbar->add($appMainTopLogoLink);
	$appMainNavbar->add($appMainNavbarMenu);
	
	/*
	$test = \fret\xtrim\Inform::_new("test");
	$test->qframe()
		->add (
			\fret\qwert\Tag::_new("br")
				->setInnerHtml("One line.")
		)
	;
	$FWS->add ( $test );
	*/

?>
