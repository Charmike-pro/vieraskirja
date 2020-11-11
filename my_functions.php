<?php

function is_valid_user($email, $password){

    $file = fopen("user.txt", "r");
    while (!feof($file)) {
        $row = fgetcsv($file, 0, ";");
        if ($email == $row[0]) {
            if (password_verify($password, $row[1])){
                return true;
            } else {
                return false;
            }
        break;
        }
    }
    return false;
}