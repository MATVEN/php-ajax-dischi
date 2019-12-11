<?php

function printElements($elements)
{
  echo "<div class='record' >"
        .'<img src='".$elements[poster]"' alt="">'
        .'<h6>'.$elements'[title]''</h6>'
        .'<p>'.$elements['author']'</p>'
        .'<p>'.$elements['year']'</p>'
        ."</div>";
}
function stamp($array){

  foreach ($array as $elements) {

    printElements($elements);

  }
}

 ?>
