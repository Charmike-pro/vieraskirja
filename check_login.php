<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    die();
}

if (!isset($_POST['email']) && !isset($_POST['password'])){
    header('Location: index.php');
    die();
}

include_once "my_functions.php";

if (is_valid_user($_POST['email'], $_POST['password'])) {
 $_SESSION['logged_in'] = true;
 header('Location: ./admin.php');
} else {
    header('Location: ./login.php');
}

?>