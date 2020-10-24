<?php
session_start();
require 'server/checkLogin.php';
if(!check()){
    header("location:index.php");
    die;  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <?php
    $use = $_SESSION['user'] ?? '';
    ?>
    <h2>Hi:
        <?= $use; ?></h2>
    <form action="server/logout.php" method="post">
        <button type="submit" class="btn btn-success" name="btnLogout">Logout</button>
    </form>
</body>

</html>