<?
	$myAppNavbar = \fret\xtrim\Navbar::_new("myAppNavbar");

	$myAppNavbarLogo = \fret\xtrim\Image::_new("myAppNavbarLogo");
	$myAppNavbarLogo->setSource($_BASE_."_img/ccg-logo.png");
	$myAppNavbarLogo->tagImage()->set("width","32px");

	$myAppNavbarLogoLink = \fret\xtrim\Link::_new("myAppNavbarLogoLink");
	$myAppNavbarLogoLink->setURL($_BASE_);
	$myAppNavbarLogoLink->add($myAppNavbarLogo);
	$myAppNavbarLogoLink->tagLink()->setClass(["navbar-brand"]);

	$myAppNavbarTitle = \fret\xtrim\NavbarTitle::_new("myAppNavbarTitle")->setTitle("Cognitive Computation Group");

	$myAppNavbar->add($myAppNavbarLogoLink);
	$myAppNavbar->add($myAppNavbarTitle);

?>
