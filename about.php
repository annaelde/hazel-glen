<?php $title = "Hazel Glen Community | About";
$description = "Learn about Hazel Glen, including information about our homeowners association.";
$newsletter = true;
include($_SERVER['DOCUMENT_ROOT']."/includes/head.php"); ?>
    <div class="three-column row-auto">
		<div class="content">
			<h1>Board</h1>
			<div class="flex-container">
				<div><img src="images/jane-doe.jpg" alt="Jane Doe, our President.">
				<h2>Jane Doe</h2>
				<h3>President</h3>
				</div>
				<div>
				<img src="images/john-doe.jpg" alt="John Doe, our Treasurer.">
				<h2>John Doe</h2>
				<h3>Treasurer</h3>
				</div>
				<div>
				<img src="images/jane-doe.jpg" alt="Janet Doe, our Secretary.">
				<h2>Janet Doe</h2>
				<h3>Secretary</h3>
				</div>
			</div>
		</div>
		<div class="separator-container"><img class="separator" src="./images/separator.svg" aria-hidden="true" alt=""/></div>
		<div class="sidebar">
			<a id="dues"></a><h1>Dues</h1>
			<p>This year, the deadline for dues is April 30th, 2017. They are $90.00 for the entire year. Please send or drop-off your dues at Hazel Glen, Sanford, FL 32773.</p>
			<p>We accept checks or cash. Please make out your checks to Hazel Glen Community Assoc Inc. and write the address of the property in the Memo section.</p>
		</div>
		<div class="sidebar">
			<h1>Bylaws</h1>
			<p>The bylaws for Hazel Glen Community Association Inc. describe how the homeowners association operates and the rules that members need to abide by. Know your rights&mdash;read the bylaws!</p>
			<p>The bylaws for our homeowners association are now available online. <a href="bylaws.pdf">View our bylaws here.</a></p>
		</div>
	</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/includes/footer.php"); ?>