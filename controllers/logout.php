<?php

 include("../controllers/connexion.php");


unset($_SESSION['login']);

session_destroy();
if(!isset($_SESSION['login'])){
   header('location:../admin/index.php');
    exit;
}


?>