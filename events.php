<?php $title = "Hazel Glen Community | Events";
$description = "Find out about future community gatherings and homeowners association meetings at Hazel Glen.";
$newsletter = true;
include($_SERVER['DOCUMENT_ROOT']."/includes/head.php"); ?>
<div class="one-column center row-auto">
	<div class="content">
	<h1>Events</h1>
	<p>Check out the upcoming events in our community! Suggestions for events are welcome. If you have an idea for an event, <a href="contact.php">send us a message</a> and we'll look into planning it.</p>
	</div>
	<?php 
	$xsl = new DOMDocument();
	$xsl->load("xml/events.xsl");
	$xml = new DOMDocument();
	$xml->load("xml/events.xml");

	$processor = new XSLTProcessor();
	$processor->importStylesheet($xsl);
	$styledXML = $processor->transformToDoc($xml);
	print $styledXML->saveHTML();
	?>
</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>