<?php
    // for Jeu.php
    // The "header" overrides the default
    // text/html Content-Type set by PHP with text/css.
    
    header("Content-type: text/css");

    $font_family = 'Trebuchet MS, Verdana, Helvetica';
    $font_size = '1em';
    $font_color = '#ffffff';
    $backgroundColor = [
      $background_color = '#808080',
      $background_color = '#F6B6B5',
      $background_color = '#56C663',
      $background_color = '#5194E2'
    ];
  ?>



body {
    background-color: <?php echo $backgroundColor[0]; ?>;
    color: <?php echo $font_color; ?>;
    font-size: <?php echo $font_size; ?>;
    font-family: <?php echo $font_family; ?>;
}

.alert-erreur {
  background-color: <?php echo $backgroundColor[1]; ?>;
  color: <?php echo $font_color; ?>;
  font-size: <?php echo $font_size; ?>;
}

.alert-succes {
    background-color: <?php echo $backgroundColor[2]; ?>;
    color: <?php echo $font_color; ?>;
    font-size: <?php echo $font_size; ?>;
}

.button-submit{
    background-color: <?php echo $backgroundColor[3]; ?>;
    color: <?php echo $font_color; ?>;
    font-size: <?php echo $font_size; ?>;
}

