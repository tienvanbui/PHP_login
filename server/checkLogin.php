<?php 
function check(){
    if (!isset($_SESSION['user']) || !isset($_COOKIE['Login'])) {
        return false;
    }
    return true;
}