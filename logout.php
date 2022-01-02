<?php
   session_start();
   // unset($_SESSION["login"]);
   // unset($_SESSION["password"]);
   session_destroy();
   
   echo 'Redirecting to Home Page...';
   header('Refresh: 2; URL = index.php');
?>