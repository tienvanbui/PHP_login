<?php
session_start();
require 'server/checkLogin.php';
if (check()) {
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <h1 class="text-center py-4">Login</h1>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form action="server/handle.php" method="post" class="border p-3">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="remember">Remember me:</label>
                        <input type="checkbox" name="remember">
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>