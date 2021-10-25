<?php

if(isset($_POST['email'])) {
    $msg = getPassword($_POST['email']);

    if($msg === true) {
        $_SESSION['msg'] = "Новый пароль выслан Вам на почту";
        header("Location:login.php");
    }
    else {
        $_SESSION['msg'] = $msg;
        header("Location:".$_SERVER['PHP_SELF']);
    }
    exit();
}

$content = render(TEMPLATE . "returnpass", ["title" => "hello"]);
