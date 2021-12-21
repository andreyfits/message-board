<?php

if(!$user) {
    $text    = "Access denied";
    $content = render(TEMPLATE."error", ["text"=>$text]);
}
else {

    if ($_POST) {
        $idMess     = (int)$_POST['id'];
        $actualTime = (int)$_POST['time'];

        if (checkYouMess($user['user_id'], $idMess)) {
            $msg = updateActualTime($idMess, $actualTime);

            if ($msg === true) {
                $_SESSION['msg'] = "The relevance of the post has been changed";
            }
            else {
                $_SESSION['msg'] = $msg;
            }

            header("Location:?action=pMess");
            exit();
        }
    }

    if ($_GET['delete']) {
        $idMess = (int)$_GET['delete'];

        if (checkYouMess($user['user_id'], $idMess)) {
            $msg = deleteMess($idMess);

            if ($msg === true) {
                $_SESSION['msg'] = "Deleted";
            }
            else {
                $_SESSION['msg'] = $msg;
            }

            header("Location:?action=pMess");
            exit();
        }
    }

    $text = getPMess($user['user_id']);
    if(is_array($text)) {
        $text = smallText($text);
    }

    $content = render(
        TEMPLATE."pMess",
        [
            'text' => $text
        ]
    );
}
