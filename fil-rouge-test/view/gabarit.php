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

        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="content/js/bootstrap.min.js"></script>
        <script src="content/js/common.js"></script>

    </head>

    <body>

      <div class="container">

        <?php
        include_once("inc/header.php");
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