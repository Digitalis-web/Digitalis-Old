<?php
//loading page
include "include_pages/load.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Digitalis">
    <title>Digitalis Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Digital Internet Solutions">

    <link href="css/app.css" rel="stylesheet">

    <!--======================================= JAVA SCRIPT ===========================-->
    <!--JQuery-->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <!--Velocity -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.js" type="text/javascript"></script>
    <script src="js/jquery.color.js"></script>
    <!--treeline bakround slider-->
    <script src="js/backgroundslider.js"></script>

    <!-- JavaScript -->
    <script src="js/scripts.js"></script>
    <!-- Smooth scoll-->
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <!--Fade in-->
    <script src="js/fade.in.js"></script>
    <!--slide in-->
    <script src="js/slide.in.js"></script>

    <!-- Latest compiled and minified JavaScript for bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>

    <!--icon-->
    <link rel="shortcut icon" href="img/logo/icontop.png" type="image/x-icon" />
</head>
<?php
include "functions/functions.php";
?>
<body class="wrapper col-xs-12">
<?php
// include nav and language page
//include "include_pages/nav.php";
//include "include_pages/language.php"

?>

<!-- Img slider top -->
<section class="intro container-fluid item" id="indexp1">
    <div class="row-fluid intro">
        <!--background slider -->
        <div class="background-slider col-xs-12 nopm"></div>
        <!-- The text on the frontage -->
        <div class="intro-text">
            <h1>Hello</h1>
            <h2>We are Digitalis we are Creative, functional and alluring. </h2>
        </div>
    </div>
</section>

<?php
// Work page temporary
include "work.php";
//about us page
include "index_about.php";
// including the separate footer to the page
include "include_pages/footer.php";
?>
</body>
</html>
