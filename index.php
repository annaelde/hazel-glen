<?php $title = "Hazel Glen Community in Sanford, FL";
$description = "Hazel Glen is a small community in Sanford, Florida. Learn more about us and our homeowners association.";
$newsletter = true;
$banner = true;
include($_SERVER['DOCUMENT_ROOT']."/includes/head.php"); ?>
	<div id="banner-container"><img id="banner" src="images/sign.png" alt="The sign at the entrance to our community." /></div>
	<div class="three-column row-auto">
		<div class="content">
			<h1>Welcome to Hazel Glen</h1>
			<div>
				<div class="button right"><a href="about.php#dues">Dues for<br>2017</a></div>
				<div><p>Hazel Glen is a small community located in Sanford, Florida, near the Lake Mary Sunrail Station. Our homeowners association helps to maintain our common areas and organize community events for everyone's enjoyment.</p></div>
			</div>
		</div>
		<div class="separator-container"><img class="separator" src="./images/separator.svg" aria-hidden="true" alt=""/></div>
		<div class="sidebar">
			<h2>Latest News</h2>
			<?php 
			$xsl = new DOMDocument();
			$xsl->load("xml/news-latest.xsl");
			$xml = new DOMDocument();
			$xml->load("xml/news.xml");

			$processor = new XSLTProcessor();
			$processor->importStylesheet($xsl);
			$styledXML = $processor->transformToDoc($xml);
			print $styledXML->saveHTML();
			?>
		</div>
		<div class="sidebar">
			<h2>Events</h2>
			<?php
			$xsl = new DOMDocument();
			$xsl->load("xml/events-latest.xsl");
			$xml = new DOMDocument();
			$xml->load("xml/events.xml");

			$processor = new XSLTProcessor();
			$processor->importStylesheet($xsl);
			$styledXML = $processor->transformToDoc($xml);
			print $styledXML->saveHTML();
			?>
		</div>
	</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>