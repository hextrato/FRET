<?
	$myAppNavbar = \fret\xtrim\Navbar::_new("myAppNavbar");

	$myAppNavbarLogo = \fret\xtrim\Image::_new("myAppNavbarLogo");
	$myAppNavbarLogo->setSource($_BASE_."_img/ccg-logo.png");
	$myAppNavbarLogo->tagImage()->set("width","32px");

	$myAppNavbarLogoLink = \fret\xtrim\Link::_new("myAppNavbarLogoLink");
	$myAppNavbarLogoLink->setURL($_BASE_);
	$myAppNavbarLogoLink->add($myAppNavbarLogo);
	$myAppNavbarLogoLink->tagLink()->css()->add(["navbar-brand"]);

	$myAppNavbarTitle = \fret\xtrim\NavbarTitle::_new("myAppNavbarTitle")->setTitle("CCG Demos");
	
	/*
	$myAppNavbarMenu = \fret\xtrim\NavbarMenu::_new("myAppNavbarMenu");
	$myAppNavbarMenu
		->add (
			\fret\xtrim\NavbarOption::_new("myAppNavbarOptionHome")
			->setCaption("Home")
			->setURL($_BASE_) // ."Home/")
		)
		->add (
			\fret\xtrim\NavbarDropdown::_new("myAppNavbarOptionAccount")
			->setCaption("Account")
			->addOption("Login",$_BASE_."Account/Login/")
			->addDivider()
			->addOption("Logout",$_BASE_."Account/Logout/")
		)
		->add (
			\fret\xtrim\NavbarOption::_new("myAppNavbarOptionNews")
			->setCaption("About")
			->setURL($_BASE_."About/")
		)
	;

	$myAppNavbarSearch = \fret\xtrim\NavbarSearch::_new("myAppNavbarSearch");
	$myAppNavbarMenu->tagFrame()->add($myAppNavbarSearch->tagForm());
	$myAppNavbarSearch->tagForm()->set("action",$_BASE_."Search/");
	*/
	
	$myAppNavbar->add($myAppNavbarLogoLink);
	// $myAppNavbar->add($myAppNavbarMenu);
	$myAppNavbar->add($myAppNavbarTitle);

?>
