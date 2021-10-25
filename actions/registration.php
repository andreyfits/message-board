<?php

if ($_GET['hash']) {

    $confirmMessage = confirm();

    if ($confirmMessage === true) {
        $_SESSION['msg'] = "Ваша учетная запись активирована. Можете авторизоваться на сайте.";
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
        $_SESSION['msg'] = "Вы успешно зарегистрировались на сайте. И для подтверждения регистрации Вам на почту"
            . " отправлено письмо с инструкциями.";
    } else {
        $_SESSION['msg'] = $msg;
    }

    header("Location:" . $_SERVER['PHP_SELF']);
    exit();
}

$content = render(TEMPLATE . "registration", ["title" => "hello"]);
