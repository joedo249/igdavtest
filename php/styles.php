<?php
    // for Jeu.php
    // The "header" is the most important part of
    // this code. Without it, it will not work.
    //header('HTTP/1.0 304 Not Modified');
    //header('Cache-Control: max-age=3600, must-revalidate');
    
    header("Content-type: text/css");

    $font_family = 'Trebuchet MS, Verdana, Helvetica';
    $font_size = '1.5em';
    $background_color = '#000000';
    $font_color = '#ffffff';

    // Close the PHP code block.
  ?>



body {
    background-color: <?php echo $background_color; ?>;
    color: <?php echo $font_color; ?>;
    font-size: <?php echo $font_size; ?>;
    font-family: <?php echo $font_family; ?>;
}

<!--
  .alert-erreur {
      background-color: <?php echo $background_color; ?>;
      color: <?php echo $font_color; ?>;
      font-size: <?php echo $font_size; ?>;
  }

  .alert-success {
      background-color: <?php echo $background_color; ?>;
      color: <?php echo $font_color; ?>;
      font-size: <?php echo $font_size; ?>;
  }
-->  


