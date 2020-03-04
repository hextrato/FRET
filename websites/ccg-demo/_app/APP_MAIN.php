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
