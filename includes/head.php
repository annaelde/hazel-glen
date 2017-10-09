<?php

// Turn off all error reporting
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="utf-8" />
        <meta name="author" content="Anna Elde" />
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="dcterms.rightsHolder" content="Hazel Glen Community Association Inc." />
        <meta name="robots" content="noindex, nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.min.css" />
        <script type="text/javascript" src="js/ie-detect.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <?php if (isset($newsletter)) echo '<script type="text/javascript" src="js/sweetalert2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css" /><script type="text/javascript" src="js/newsletter.js"></script>'; ?>
        <script type="text/javascript" src="js/separator.js"></script>
        <script type="text/javascript" src="js/navbar.js"></script>
    </head>
    <body>
        <div id="back"><a href="/projects">↩ back to projects</a></div>
        <header>
        <a href="./index.php" tabindex="1">
            <div id="logo"><img src="./images/hazel-oak.svg" alt="An oak representing Hazel Glen."/></div>
            <div id="title">Hazel Glen Community</div>
        </a>
        </header>
        <nav>
            <ul>
                <li><a href="about.php" tabindex="2">About</a>
                <li><a href="news.php" tabindex="3">News</a>
                <li><a href="events.php" tabindex="4">Events</a>
                <li><a href="directory.php" tabindex="5">Directory</a>
                <li><a href="contact.php" tabindex="6">Contact</a>
            </ul>
        </nav>
        <main>
        <div class="separator-container"><img class="separator" src="./images/separator.svg" aria-hidden="true" alt=""/></div>
