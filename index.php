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

    <link rel="apple-touch-icon" sizes="57x57" href="image/fav/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="image/fav/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="image/fav/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="image/fav/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="image/fav/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="image/fav/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="image/fav/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="image/fav/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="image/fav/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="image/fav/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="image/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/fav/favicon-16x16.png">
    <link rel="manifest" href="image/fav/manifest.json">
    <meta name="msapplication-TileColor" content="#EAEFF3">
    <meta name="msapplication-TileImage" content="image/fav/ms-icon-144x144.png">
    <meta name="theme-color" content="#EAEFF3">

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
