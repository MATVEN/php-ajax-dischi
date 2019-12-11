<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>

  </head>
  <body>

    <div id="container" class="container">

    </div>

    <!-- handlebars -->
    <script id="hb-template" type="text/x-handlebars-template">
      <div class='music-row'>
        <img src="{{poster}}" alt="">
        <h6><strong>{{title}}</strong></h6>
        <p>{{author}}</p>
        <p>{{year}}</p>
      </div>
    </script>
  </body>


</html>
