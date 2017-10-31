<?php
  session_start();
  session_destroy();
  //redirect
  header('Location: front.php')
?>