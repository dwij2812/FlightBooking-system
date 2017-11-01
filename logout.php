<?php
  session_start();
  session_destroy();
  echo '<script type="text/javascript">alert("Successfully Logged Out!");</script>';
  //redirect
  header('Location: front.php')
?>