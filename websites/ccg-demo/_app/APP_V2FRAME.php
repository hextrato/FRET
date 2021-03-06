<?

	$myAppFrameV2 = \fret\xtrim\FrameV2::_new("myAppFrameV2");

	$myAppLeftMenu = \fret\xtrim\VMenu::_new("myAppLeftMenu");
	$myAppLeftMenu
		->add (
			\fret\xtrim\VMenuGroup::_new("G0")
			->disableHide()
			->add(
				\fret\xtrim\TitleH5::_new("myAppLeftMenuTitle")
				->setTitle("CCG Demos")
			)
		)
		->add (
			\fret\xtrim\VMenuGroup::_new("G0")
				->setOption("Annotators")
				//->hide()
				->disableHide()
				->add (
					\fret\xtrim\VMenuOption::_new("a")
						->setOption("CogComp-NLP")
						->setLink($_BASE_."demo/CogComp-NLP/")
				)
				->add (
					\fret\xtrim\VMenuOption::_new("c")
						->setOption("Wikifier")
						->setLink($_BASE_."demo/Wikifier/")
						
				)
		)
		->add (
			\fret\xtrim\VMenuGroup::_new("G1")
				->setOption("Temporal")
				//->hide()
				->disableHide()
				->add (
					\fret\xtrim\VMenuOption::_new("d")
						->setOption("MC-TACO")
						->setLink($_BASE_."demo/MC-TACO/")
				)
		)
		->add (
			\fret\xtrim\VMenuGroup::_new("G2")
				->setOption("Query/Answer")
				//->hide()
				->disableHide()
				->add (
					\fret\xtrim\VMenuOption::_new("e")
						->setOption("QuASE")
						->setLink($_BASE_."demo/QuASE/")
				)
		)
	;

	$myAppFrameV2->add($myAppLeftMenu);
	// $myAppLeftMenu->add(...);

?>
