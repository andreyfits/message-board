<?php

if(isset($_POST['email'])) {
    $msg = getPassword($_POST['email']);

    if($msg === true) {
        $_SESSION['msg'] = "A new password has been sent to your email";
        header("Location:login.php");
    }
    else {
        $_SESSION['msg'] = $msg;
        header("Location:".$_SERVER['PHP_SELF']);
    }
    exit();
}

$content = render(TEMPLATE . "returnpass", ["title" => "hello"]);
