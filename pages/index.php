<?php
$header_type = "header";
$navbar_type = "nav";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tanya's Website</title>
    <link rel="stylesheet" type="text/css" href="public/styles/styles.css" media="all" />
</head>

<body class="home">
    <?php include('includes/header.php'); ?>
    <main class="home-pg-text">
        <div>
            <blockquote>
                Hello, my name is Tanya Zhou, and I'm currently a student at Cornell University, studying Computer
                Science
                and Mathematics.
            </blockquote>
            <blockquote>
                Feel free to browse my website and check out my projects and interests in computer science
                and math, along with some of my artwork :)
            </blockquote>
            <blockquote>You can find me on:</blockquote>
        </div>
        <p>
            <a href="https://www.linkedin.com/in/tanya-zhou-4242861a9/">
                <!-- Source: https://www.iconfinder.com/icons/107159/circle_linkedin_icon -->
                <img class="home-pg-logo" src="public/imgs/linkedin-logo-resize.png" alt="Tanya's Linkedin">
                Source: <cite class="citation"><a href="https://www.iconfinder.com/icons/107159/circle_linkedin_icon">iconfinder</a></cite>
            </a>
            <a href="https://github.com/tanyazhouu">
                <!-- Source: https://en.wikipedia.org/wiki/File:Octicons-mark-github.svg -->
                <img class="home-pg-logo" src="public/imgs/github-logo-resize.png" alt="Tanya's GitHub">
                Source: <cite><a href="https://en.wikipedia.org/wiki/File:Octicons-mark-github.svg">wikipedia</a></cite>
            </a>
        </p>
    </main>
    <?php include('includes/footer.php'); ?>
</body>

</html>
