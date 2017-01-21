<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>project2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Omschrijving voor SEO" />
    <meta name="keywords" content="Keywords" />
    <meta name="author" content="Team achtpuntzeven">
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="3 month" />

    <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="fav/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="fav/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="fav/manifest.json">
    <link rel="mask-icon" href="fav/safari-pinned-tab.svg">
    <meta name="theme-color" content="#ffffff">

    <!-- javascript -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/javascript.js"></script>

    <!-- css -->
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <!-- <link rel="stylesheet" href="css/jouwbestand.css" media="screen" title="no title"> -->
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
    <link rel="stylesheet" href="css/menu.css" media="screen" title="no title">


</head>
<body>
    <?php
    include 'page/menu/menu.php';
    include 'page/menu/header.php';
    ?>
    <main class="contain">

        <?php
        include 'page/login.php';
        ?>

        <script type="text/javascript">
        $(document).ready(function(){

            $('nav ul a').click(function(){
                var page = $(this).attr('href');
                $('.contain').load(page +'.php');
                return false;

            });

            // dit kan er een zijn
            $('ul a').click(function(){
                var page = $(this).attr('href');
                $('.contain').load(page +'.php');
                return false;

            });
        });

        </script>

    </main>
</body>
</html>
