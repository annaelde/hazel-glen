<?php $title = "Hazel Glen Community | Contact";
$description = "Need to get in touch with Hazel Glen's homeowners association? Find our contact information here.";
$newsletter = true;
include($_SERVER['DOCUMENT_ROOT']."includes/head.php"); ?>
<div class="two-column center row-auto">
	<div class="sidebar">
		<h1>Contact Us</h1>
			<h2>Phone</h2>
			<p><a href="tel:5557008000">555-700-8000</a></p>
			<h2>Mailing Address</h2>
			<p>Hazel Glen, Sanford, FL 32773</p>
			<h2>Email</h2>
			<p><a href="mailto:example@example.com">example@example.com</a></p>
	</div>
	<div class="content">
		<h1>Send a Message</h1>
		<?php
		// form validation and processing
		// define variables and set to empty values
		$name = $email = $address = $subject = $comment = $newsletter = "";
		$send = true;
		$nameError = $emailError = $subjectError = $commentError = "";
		$confirmation = "";

		// if the form has been submitted...
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			// check if the name is filled out and valid
			$name = test_input($_POST["name"]);
			if (empty($name))
			{
			  	$nameError = "*Required";
			  	$send = false;
			}
			else if (!preg_match("/^[a-zA-Z ]*$/", $name)) 
			{
	  			$nameError = "Only letters and spaces allowed.";
	  			$send = false;
	  		} 

	  		// strip anything unnecessary from the address 
	  		// (not a required field so no error if empty)
			$address = test_input($_POST["address"]);

	  		// check if the email is filled out and valid
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

			// make sure subject is filled out
	  		$subject = test_input($_POST["subject"]);
			if (empty($subject))
			{
				$subjectError = "*Required";
				$send = false;
			}

			// make sure message is filled out
			$comment = test_input($_POST["comment"]);
			if (empty($comment))
			{
				$commentError = "*Required";
				$send = false;
			}

			$newsletter = $_POST["newsletter"];

			// send email if everything is valid and filled out
	  		if ($send)
	  		{
	  			$submission = "Subject: $subject\n\nName: $name\n\nEmail: $email\n\nProperty: $address\n\nComment: $comment\n\nSubscribe to Newsletter: $newsletter";
	  			// mail('example@example.com', "Contact Form | Hazel Glen", $submission);
	  			$confirmation = "Thank you for your message! We'll contact you soon.";
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
			<label>Name<span class="error"><?php echo $nameError;?></span><br><input type="text" name="name" value="<?php echo $name;?>" /></label>
			<label>Property Address<br><input type="text" name="address" value="<?php echo $address;?>" /></label>
			<label>Email<span class="error"><?php echo $emailError;?></span><br><input type="text" name="email" value="<?php echo $email;?>" /></label>
			<label>Subject<span class="error"><?php echo $subjectError;?></span><br><input type="text" name="subject" value="<?php echo $subject;?>" /></label>
			<label>Comment<span class="error"><?php echo $commentError;?></span><br><textarea rows="5" name="comment"><?php echo $comment;?></textarea></label>
			<p>Subscribe to our newsletter?</p>
			<label><input type="radio" name="newsletter" value="Yes" checked>Yes</label>
			<label><input type="radio" name="newsletter" value="No">No</label>
            <input type="submit" value="Submit" />
            <a id="submit"></a><span class="confirmation"><?php echo $confirmation;?></span>
		</form>
	</div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT']."includes/footer.php"); ?>