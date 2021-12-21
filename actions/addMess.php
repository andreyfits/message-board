<?php

if (!$user || !can($user['id_role'], ['ADD_MESS'])) {
    $text    = "Access denied";
    $content = render(TEMPLATE . "error", ["text" => $text]);
} else {
    if($_POST) {
        $msg = addMess($_POST,$user['user_id']);

        if($msg === true) {
            $_SESSION['msg'] = "Успешно добавлено. Ожидает проверки модератора";
        }
        else {
            $_SESSION['msg'] = $msg;
        }

        header("Location:".$_SERVER['PHP_SELF']);
        exit();
    }
    $content = render(
        TEMPLATE . "addMess",
        [
            "categories" => $categories,
            "types"      => $types
        ]
    );
}
