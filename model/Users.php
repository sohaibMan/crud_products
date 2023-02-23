<?php
function isUserExist($email, $password)
{
    $file = fopen($_SERVER['DOCUMENT_ROOT'] . "/www/model/data/users.csv", "r");
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
        if (strcmp($row[1], $email) == 0 && strcmp($row[2], $password) == 0) {
            return [$row[0], $row[3]];
        }
    }
    return -1;
}
