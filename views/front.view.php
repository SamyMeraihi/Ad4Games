<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="CMS Ad4Games">
        <meta name="author" content="Samy MERAIHI">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- Javascript / Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    </head>

    <body>
        <?php require ('header.php'); ?>

        <div class="mainContentPanel">

            <?php
            include('sections/accueil.php');
            include('sections/trailers.php');
            include('sections/news.php');
            include('sections/introduction.php');
            include('sections/gameplays.php');
            ?>

        </div>

        <?php require ('footer.php'); ?>
    </body>
</html>