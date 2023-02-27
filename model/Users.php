<?php
define('PASSWORD_DEFAULT', "NODE JS IS THE BEST ONE");
function isUserExist($email, $password)
{
    $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/model/data/users.csv", "r");
    if (!$file) {
        echo "Error opening file";
        echo "error: " . $file;
        echo $_SERVER['DOCUMENT_ROOT'] . "/model/data/users.csv";
        fclose($file);
        exit();
    }

    $csvHeader = fgetcsv($file);
    while (!feof($file)) {
        $row = fgetcsv($file);
        if (strcmp($row[1], $email) == 0 && password_verify($password, $row[2]) == true) {
            return [$row[0], $row[3]];
        }
    }
    return -1;
}
function createUser($user_name, $email, $password, $password_repeated)
{

    if (!strcmp($password, $password_repeated) == 0) {
        return "Please Provide the same password";
    }
    $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/model/data/users.csv", "a+");
    if (!$file) {
        echo "Error opening file";
        echo "error: " . $file;
        echo $_SERVER['DOCUMENT_ROOT'] . "/model/data/users.csv";
        fclose($file);
        exit();
    }

    $csvHeader = fgetcsv($file);
    while (!feof($file)) {
        $row = fgetcsv($file);
        if (strcmp($row[1], $email) == 0) {
            return "Email already in use";
        }
    }
    fputcsv($file, array(uniqid("user"), $email, password_hash($password, PASSWORD_DEFAULT), $user_name));
    return 1;
}
