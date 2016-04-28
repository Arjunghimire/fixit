<?php
   session_start();
   $des=$_SESSION['user_id'];
   session_unset($des);
   session_destroy();
   header("Location:signin.php");
   exit();
?>