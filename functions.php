<?php

function db($host, $user, $pass, $dbName)
{
    $db = mysqli_connect($host, $user, $pass);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
}

function clearStr($str): string
{
    return trim(strip_tags($str));
}

function render($path, $param = [])
{
    extract($param);

    ob_start();

    if (!include($path . ".php")) {
        exit("Template doesn't exist");
    }

    return ob_get_clean();
}