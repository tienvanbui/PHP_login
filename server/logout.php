<?php 
session_start();
if(isset($_POST['btnLogout'])){
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
        
    }
    header("Location:../index.php?state=Login");  
}