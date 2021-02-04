<?php
session_start();

if(isset($_POST['password']) && $_POST['password'] === "12345") {
    $check = true;
}
else {
    $check = false;
}
$_SESSION['check'] = $check;
header('location: index.php');