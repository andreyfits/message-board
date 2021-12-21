<?php

if ($_GET['hash']) {

    $confirmMessage = confirm();

    if ($confirmMessage === true) {
        $_SESSION['msg'] = "Your account is activated. You can log in on the site.";
        header("Location:" . $_SERVER['PHP_SELF']);
        exit();
    }

    $_SESSION['msg'] = $confirmMessage;
    header("Location:" . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['reg'])) {

    $msg = registration($_POST);

    if ($msg === true) {
        $_SESSION['msg'] = "You have successfully registered on the site. And to confirm registration, a letter with"
            . " instructions has been sent to your email.";
    } else {
        $_SESSION['msg'] = $msg;
    }

    header("Location:" . $_SERVER['PHP_SELF']);
    exit();
}

$content = render(TEMPLATE . "registration", ["title" => "hello"]);
