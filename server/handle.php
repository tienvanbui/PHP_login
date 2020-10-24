<?php
session_start();
if (isset($_POST['btnLogin'])) {
    $user = $_POST['user'] ?? '';
    $user = trim($user);
    $user = strip_tags($user);
    $password = $_POST['password'] ?? '';
    $password = trim($password);
    $password =  strip_tags($password);
    $remember = $_POST['remember'];
    if (!empty($_POST['user']) && !empty($_POST['password'])) {
        $fopen = fopen("../database.txt", "r");
        //ket noi thanh cong database
        if ($fopen) {
            $data = fread($fopen, filesize("../database.txt"));
            $arrdatauser = explode(",", $data);
            if ($arrdatauser[0] == $user && $arrdatauser[1] == $password) {
                //login thanh cong
                //tao ra session luu tru thong tin nguoi dung tren server
                $_SESSION['user'] = $user;
                //tao cookie
                if ($remember === 'on') {
                    setcookie("Login", "LoginUser", time() + 3600, "/", "", 0);
                } else {
                    setcookie("Login", "LoginUser", time() + 10, "/", "", 0);
                }
                header("Location:../home.php");
            } else {
                header("Location:../index.php?state=fail");
            }
        } else {
            header("Location:../index.php?state=error");
        }
    } else {
        header("Location:../index.php?state=emptyData");
    }
}