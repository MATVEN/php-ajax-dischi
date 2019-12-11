<?php
/* Stampare a schermo una decina di dischi musicali
(vedi screenshot) in due modi diversi:
- Solo con l'utilizzo di PHP, che stampa
direttamente i dischi in pagina: al caricamento
della pagina ci saranno tutti i dischi.
- Attraverso l'utilizzo di AJAX: al caricamento
della pagina ajax chiederà attraverso una
chiamata i dischi a php e li stamperà
attraverso handlebars.
Utilizzare: Html, Sass, JS, jQuery, handlebars, Php */
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <?php
    include 'data.php';
    include 'helper.php';
     ?>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="album">

          <?php stamp($database) ?>
          
        </div>
      </div>
    </div>
  </body>
</html>
