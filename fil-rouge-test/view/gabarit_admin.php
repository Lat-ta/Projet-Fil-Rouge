<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site Velo'v location de vélos</title>
        <meta name="description" content="Site de location de vélos dans la ville de Lyon">        

        <link rel="stylesheet" href="content/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="content/css/style.css"/>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcJpT6O7yGV8iUVKev9dZW6JEGCnvQqQM"></script>

        <script src="content/js/bootstrap.min.js"></script>
        <script src="content/js/common.js"></script>

    </head>

    <body class="admin">

      <div class="container">

        <?php
        include_once("inc/header_admin.php");
        ?>


        <div class="sub-container">

          <?= $contenu ?>   <!-- Élément spécifique -->

        </div>


        <?php
          include_once("inc/footer.php");
        ?>      

      </div>

    </body>

</html>