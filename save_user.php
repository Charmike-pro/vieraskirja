<?php

$email = htmlspecialchars($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$rivi = "$email;$password" . PHP_EOL;

include_once 'my_functions.php';

$file = fopen("user.txt", "a");
fwrite($file, $rivi);
fclose($file);

?>