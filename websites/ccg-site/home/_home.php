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

	$appCarousel = \fret\xtrim\Carousel::_new("appMainCarousel");

	$appCarouselItem1 = \fret\xtrim\CarouselItem::_new("appMainCarouselItem1");
	$appCarouselItem1->setImage($_BASE_."_img/carousel-1.jpg");
	$appCarouselItem1->tagCaption()
		->add(
			\fret\xtrim\Tag::_new("h5")->setInnerHtml("Cognitive Computation Group")
		)
		->add(
			\fret\xtrim\Tag::_new("virtual")->setInnerHtml("Department of Computer and Information Science")
		)
		->add(
			\fret\xtrim\Tag::_new("br")->setInnerHtml("University of Pennsylvania")
		)
	;
	$appCarouselItem1->tagFrame()->css()->add(["active"]);

	$appCarouselItem2 = \fret\xtrim\CarouselItem::_new("appMainCarouselItem2");
	$appCarouselItem2->setImage($_BASE_."_img/carousel-2.jpg");
	$appCarouselItem2->tagCaption()
		->add(
			\fret\xtrim\Tag::_new("h5")->setInnerHtml("Research")
		)
	;

	$appCarouselItem3 = \fret\xtrim\CarouselItem::_new("appMainCarouselItem3");
	$appCarouselItem3->setImage($_BASE_."_img/carousel-3.jpg");
	$appCarouselItem3->tagCaption()
		->add(
			\fret\xtrim\Tag::_new("h5")->setInnerHtml("Publications")
		)
	;

	$appCarouselItem4 = \fret\xtrim\CarouselItem::_new("appMainCarouselItem4");
	$appCarouselItem4->setImage($_BASE_."_img/carousel-4.jpg");
	$appCarouselItem4->tagCaption()
		->add(
			\fret\xtrim\Tag::_new("h5")->setInnerHtml("Demos")
		)
	;

	$appCarousel
		->addItem($appCarouselItem1)
		->addItem($appCarouselItem2)
		->addItem($appCarouselItem3)
		->addItem($appCarouselItem4)
	;
	
	$FWS->add ( $appCarousel );
	
	$appMain = \fret\xtrim\Container::_new("appMainContent");
	$appMain->tagContainer()->set("style","border: 0px solid #000; margin: 0px; text-align: center; display: inline-block; position:relative;");

	$FWS->add ( $appMain );

	$appCCG = \fret\xtrim\Infobox::_new("appMainCCG");
	$appCCG->tagFrame()
		->add (
			\fret\xtrim\Tag::_new("h3")
				->setInnerHtml("Cognitive Computation Group @ U. Penn")
		)
		->add (
			\fret\xtrim\Tag::_new("p")
				->setInnerHtml("Our research focuses on the computational foundations of intelligent behavior. We develop theories and systems pertaining to intelligent behavior using a unified methodology - at the heart of which is the idea that learning has a central role in intelligence.")
		)
		->add (
			\fret\xtrim\Tag::_new("p")
				->setInnerHtml("Our work spans several aspects of this problem -- from theoretical questions in machine learning, knowledge representation and reasoning to experimental paradigms and large scale system development -- and draws on methods from theoretical computer science, probability and statistics, artificial intelligence, linguistics and experimental computer science.")
		)
		->add (
			\fret\xtrim\Tag::_new("p")
				->setInnerHtml("Check out further details about our:")
		)
		->add (
			\fret\xtrim\Tag::_new("ul")
				->add (
					\fret\xtrim\Tag::_new("li")
						->add (
							\fret\xtrim\Tag::_new("a")
								->setInnerHtml("Software")
								->set("href",$_BASE_."Software/")
						)
				)
				->add (
					\fret\xtrim\Tag::_new("li")
						->add (
							\fret\xtrim\Tag::_new("a")
								->setInnerHtml("Demos")
								->set("href",$_BASE_."Demos/")
						)
				)
				->add (
					\fret\xtrim\Tag::_new("li")
						->add (
							\fret\xtrim\Tag::_new("a")
								->setInnerHtml("Publications")
								->set("href",$_BASE_."Publication/")
						)
				)
				->add (
					\fret\xtrim\Tag::_new("li")
						->add (
							\fret\xtrim\Tag::_new("a")
								->setInnerHtml("GitHub Repositories")
								->set("href","https://cogcomp.github.io/CCG")
								->set("target","_blank")
						)
				)
		)
	;
	$appMain->add ( $appCCG );

	$appNews = \fret\xtrim\Infobox::_new("appMainNews");
	$appNews
		//->add (
		//	\fret\xtrim\FTitleH3::_new("appMainNewsTitle")
		//		->setTitle("Latest news...")
		//)
		->add (
			\fret\xtrim\NewsHeadline::_new("News1")
				->setTitle("Postdoc Opportunity")
				->setIntro("The Cognitive Computation Group is looking for a postdoctoral researcher in natural language understanding, machine learning, knowledge acquisition, and reasoning.")
		)
		->add (
			\fret\xtrim\NewsHeadline::_new("News2")
				->setTitle("Curator Demo")
				->setIntro("We are happy to announce the Curator Demo is back to work.")
		)
		->add (
			\fret\xtrim\NewsHeadline::_new("News3")
				->setTitle("Next week...")
				->setIntro("Would you like to know what is about to by announced?")
		)
	;
	$appMain->add ( $appNews );
	
	$appStats = \fret\xtrim\Infobox::_new("appMainStats");
	$appStats->tagFrame()
		->add (
			\fret\xtrim\Tag::_new("sgv")
				->set("width","473")
				->set("height","500")
				->add (
					\fret\xtrim\Tag::_new("g")
						->set("transform","translate(75,70)")
						->add (
							\fret\xtrim\Tag::_new("g")
								->setClass(["x","axis"])
								->set("transform","translate(0,255)")
						)
						->add (
							\fret\xtrim\Tag::_new("g")
								->setClass(["y","axis"])
						)
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x", "19.5")->set("y","212.5")->setInnerHtml("10") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x", "44.5")->set("y","201.25")->setInnerHtml("13") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x", "69.5")->set("y","193.75")->setInnerHtml("15") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x", "94.5")->set("y","190")->setInnerHtml("16") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x","119.5")->set("y","175")->setInnerHtml("20") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x","144.5")->set("y","156.25")->setInnerHtml("25") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x","169.5")->set("y","148.75")->setInnerHtml("27") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x","194.5")->set("y","115")->setInnerHtml("36") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x","219.5")->set("y","70.00000000000003")->setInnerHtml("48") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x","244.5")->set("y","28.75")->setInnerHtml("59") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x","269.5")->set("y","13.75")->setInnerHtml("63") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x","294.5")->set("y","6.250000000000028")->setInnerHtml("65") )
						->add ( \fret\xtrim\Tag::_new("text")->setClass(["bar"])->set("text-anchor","middle")->set("x","319.5")->set("y","-5")->setInnerHtml("68") )
						
				)
		)
	;
/*	
<g transform="translate(75,70)">
<g class="x axis" transform="translate(0,255)"><g class="tick major" transform="translate(19.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line><text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Psycholinguistics</text>
</g>
<g class="tick major" transform="translate(44.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Medical and Scientific Text</text></g><g class="tick major" transform="translate(69.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Learning based Programming</text></g><g class="tick major" transform="translate(94.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Grammar/Spelling Correction</text></g><g class="tick major" transform="translate(119.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Trustworthiness</text></g><g class="tick major" transform="translate(144.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Textual Entailment &amp; QA</text></g><g class="tick major" transform="translate(169.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Multilingual NLP</text></g><g class="tick major" transform="translate(194.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Representations and Distributions</text></g><g class="tick major" transform="translate(219.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Incidental Supervision</text></g><g class="tick major" transform="translate(244.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Learning Models</text></g><g class="tick major" transform="translate(269.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Structured Prediction, ILP, CCMs</text></g><g class="tick major" transform="translate(294.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Entities and Events</text></g><g class="tick major" transform="translate(319.5,0)" style="opacity: 1;"><line y2="6" x2="0"></line>
<text y="0" x="0" dy="0.8em" dx="-0.4em" transform="rotate(-45)" style="text-anchor: end;">Other NLP Applications</text></g><path class="domain" d="M0,6V0H338V6"></path></g><g class="y axis"><g class="tick major" transform="translate(0,255)" style="opacity: 1;"><line x2="-6" y2="0"></line>
<text x="-9" y="0" dy=".32em" style="text-anchor: end;">0</text></g><g class="tick major" transform="translate(0,217.5)" style="opacity: 1;"><line x2="-6" y2="0"></line>
<text x="-9" y="0" dy=".32em" style="text-anchor: end;">10</text></g><g class="tick major" transform="translate(0,180)" style="opacity: 1;"><line x2="-6" y2="0"></line>
<text x="-9" y="0" dy=".32em" style="text-anchor: end;">20</text></g><g class="tick major" transform="translate(0,142.5)" style="opacity: 1;"><line x2="-6" y2="0"></line>
<text x="-9" y="0" dy=".32em" style="text-anchor: end;">30</text></g><g class="tick major" transform="translate(0,105)" style="opacity: 1;"><line x2="-6" y2="0"></line>
<text x="-9" y="0" dy=".32em" style="text-anchor: end;">40</text></g><g class="tick major" transform="translate(0,67.50000000000003)" style="opacity: 1;"><line x2="-6" y2="0"></line>
<text x="-9" y="0" dy=".32em" style="text-anchor: end;">50</text></g><g class="tick major" transform="translate(0,30)" style="opacity: 1;"><line x2="-6" y2="0"></line>
<text x="-9" y="0" dy=".32em" style="text-anchor: end;">60</text></g><path class="domain" d="M-6,0H0V255H-6"></path></g><rect class="bar" x="13" y="217.5" height="37.5" fill="#000000" width="13" style="cursor: pointer;"></rect><rect class="bar" x="38" y="206.25" height="48.75" fill="#FF8000" width="13" style="cursor: pointer;"></rect><rect class="bar" x="63" y="198.75" height="56.25" fill="#800080" width="13" style="cursor: pointer;"></rect><rect class="bar" x="88" y="195" height="60" fill="#f7626b" width="13" style="cursor: pointer;"></rect><rect class="bar" x="113" y="180" height="75" fill="#00A000" width="13" style="cursor: pointer;"></rect><rect class="bar" x="138" y="161.25" height="93.75" fill="#0a3b67" width="13" style="cursor: pointer;"></rect><rect class="bar" x="163" y="153.75" height="101.25" fill="#null" width="13" style="cursor: pointer;"></rect><rect class="bar" x="188" y="120" height="135" fill="#7f7f7f" width="13" style="cursor: pointer; opacity: 1;"></rect><rect class="bar" x="213" y="75.00000000000003" height="179.99999999999997" fill="#null" width="13" style="cursor: pointer; opacity: 1;"></rect><rect class="bar" x="238" y="33.75" height="221.25" fill="#808000" width="13" style="cursor: pointer; opacity: 1;"></rect><rect class="bar" x="263" y="18.75" height="236.25" fill="#C40000" width="13" style="cursor: pointer;"></rect><rect class="bar" x="288" y="11.250000000000028" height="243.74999999999997" fill="#D00AAA" width="13" style="cursor: pointer;"></rect><rect class="bar" x="313" y="0" height="255" fill="#0080FF" width="13" style="cursor: pointer; opacity: 1;"></rect>
<text transform="rotate(-90)" y="-75" x="-127.5" dy="1em" style="text-anchor: middle;">Number of Publications</text>
<text x="169" y="-23.333333333333332" text-anchor="middle" class="titlegraph" style="font-size: 20px; text-decoration: underline;">Publications by Topics</text>
</g>
*/

	// $FWS->add ( $appStats );

	// $appTwitter = \fret\xtrim\FInform::_new("appMainInform")->add ( \fret\xtrim\FTwitter::_new("appMainTwitter") );
	$appTwitter = \fret\xtrim\Twitter::_new("appMainTwitter") ;
	$appMain->add ( $appTwitter );

	//
	// SHOW FWS
	//
	
	$FWS->show();
?>
