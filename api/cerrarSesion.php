<!-- =======================================================
Theme Name: Steam - Hurtworld.
Author: Okana_Studios.
Designed: Okana.
Created: 06_01_2021-09_30_10.
======================================================= -->
<?php

  session_start();
  // Eliminamos la sesion
  session_destroy();
  // Redirige a el login 
  header('location: ../');

?>
