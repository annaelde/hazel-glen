<?php $title = "Hazel Glen Community | News";
$description = "Find out what's happening in our neighborhood and download our seasonal newsletter.";
$newsletter = true;
include($_SERVER['DOCUMENT_ROOT']."includes/head.php"); ?>
<div class="two-column-auto row-auto">
	<div class="content">
		<h1>Recent News</h1>
		<?php 
		$xsl = new DOMDocument();
		$xsl->load("xml/news.xsl");
		$xml = new DOMDocument();
		$xml->load("xml/news.xml");

		$processor = new XSLTProcessor();
		$processor->importStylesheet($xsl);
		$styledXML = $processor->transformToDoc($xml);
		print $styledXML->saveHTML();
		?>
	</div>
	<div class="sidebar">
		<h1>Newsletters</h1>
		<p>The homeowner's association sends out seasonal newsletters to all members. Missed one of our newsletters? Download them here in our archive.</p>
		<ul>
			<li><a href="newsletters/may2017.pdf">May 2017</a></li>
			<li><a href="newsletters/jan2017.pdf">January 2017</a></li>
			<li><a href="newsletters/sep2016.pdf">September 2016</a></li>
		</ul>
		<a id="submit"></a>
		<p>Want to receive your newsletter via email? Enter your email below to subscribe to our mailing list!</p>
		<?php
			$email = $emailError = $confirmation = "";
			$send = true;

			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
				$email = test_input($_POST["email"]);
				if (empty($_POST["email"]))
				{
				  	$emailError = "*Required";
				  	$send = false;
				}
				else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
				{
		  			$emailError = "Invalid email format.";
		  			$send = false;
		  		} 

			  	if ($send)
		  		{
		  			$submission = $email." wants to subscribe to our newsletter!";
					// mail('hazelglenhomeowners@gmail.com', "Newsletter Subscription | Hazel Glen", $submission);
		  			$confirmation = "Your email has been subscribed to our newsletter!";
		  		}
			}
			
			function test_input($data) 
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."#submit";?>" method="post">
			<input style="display:inline-block;" type="text" placeholder="me@myemail.com" name="email" value="<?php echo $email;?>" /><span class="error"><?php echo $emailError;?></span>
			<input type="submit" value="Submit" />
            <span class="confirmation"><?php echo $confirmation;?></span>
		</form>
	</div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT']."includes/footer.php"); ?>
