<html>
    <head>
        <link href="css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <title><?php if($title) { echo $title . " - Bojan Dev - Full Stack Developer"; } else { echo "Bojan Dev - Full Stack Developer"; } ?></title>
    </head>
    <body>
        <nav>
            <div class="hamburger" onclick="ham()">
                <div class="ham"></div>
                <div class="ham"></div>
                <div class="ham"></div>
            </div>
            <ul class="nav hide">
                <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="elements.php">Elements</a></li>
                <li><a href="tools.php">Tools</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>