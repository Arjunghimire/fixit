<?php
   session_start();
   $des=$_SESSION['user_id_admin'];
   session_unset($des);
   session_destroy();
   header("Location:index.php");
   exit();
?>