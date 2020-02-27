<?
	require_once("APP_INIT.php");
	$_BASE_ = $GLOBALS["BASE_APP_RELATIVE_PATH"];

	$FWS = 
		\fret\xtrim\AppService::_new("MyApp")
			->addMeta( array ("charset" => "utf-8") )

			->setTitle("CCG Demos")

			->addLink( $_BASE_."_css/fret.php" , "stylesheet" ) 
			->addScript( $_BASE_."_js/fret.php" )

			->addLink( $_BASE_."_css/app.css" , "stylesheet" ) 
			->addScript( $_BASE_."_js/app.js" )

			->addLink( $_BASE_."_img/ccg.ico" , "shortcut icon" )

			->addLink( $_BASE_."_css/bootstrap.php" , "stylesheet" ) 

			->addScript( $_BASE_."_js/jquery.php" )
			->addScript( $_BASE_."_js/popper.php" )
			->addScript( $_BASE_."_js/bootstrap.php" )

			//->addScript( $_BASE_."_add/popper/1.16.0/popper.min.js" )
			//->setScript("integrity","sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo")
			//->setScript("crossorigin","anonymous")

			//->addLink( $_BASE_."_add/bootstrap/4.4.1/css/bootstrap.min.css" , "stylesheet" ) 
			//->setLink("integrity","sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh")
			//->setLink("crossorigin","anonymous")

			//->addScript( $_BASE_."_add/bootstrap/4.4.1/js/bootstrap.min.js" )
			//->setScript("integrity","sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6")
			//->setScript("crossorigin","anonymous")
		;

	require_once("APP_NAVBAR.php");
	require_once("APP_V2FRAME.php");

	$myAppFrameTop = 
		\fret\xtrim\Frame::_new("MyAppFrameTop")
			->add ( $myAppNavbar )
	;
	
	$myAppFrameMain = 
		\fret\xtrim\Frame::_new("MyAppFrameMain")
			->add ( $myAppFrameV2 )
	;

	$FWS
		->add ( 
			\fret\xtrim\Frame::_new("MyAppFrame")
				->add ( $myAppFrameTop )
				->add ( $myAppFrameMain	)
		)
	;
	
?>
