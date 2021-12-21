<?php

if (isset($_POST['login'], $_POST['password'])) {

    $msg = login($_POST);

    if ($msg !== true) {
        $_SESSION['msg'] = $msg;
    }
    header("Location:" . $_SERVER['PHP_SELF']);

    exit();
}

if (isset($_GET['logout'])) {
    $msg = logout();

    if ($msg === true) {
        $_SESSION['msg'] = "You are logged out";

        header("Location:" . $_SERVER['PHP_SELF']);
        exit();
    }
}

$content = render(TEMPLATE . "login", ["title" => "hello"]);
