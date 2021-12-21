<?php

if (!$user) {
    $text    = "Access denied";
    $content = render(TEMPLATE . "error", ["text" => $text]);
} elseif ($_GET['id']) {
    $idMess = (int)$_GET['id'];
    if (checkYouMess($user['user_id'], $idMess)) {

        if ($_POST) {
            $msg = editMess($_POST, $user['user_id']);

            if ($msg === true) {
                $_SESSION['msg'] = "Successfully changed. Awaiting moderator review.";

                header("Location:?action=pMess");
            }
            else {
                $_SESSION['msg'] = $msg;
                header("Location:?action=editMess&id=" . $idMess);
            }
            exit();
        }

        $text = getEMess($idMess);

        if ($text['is_actual'] == 0) {
            $actual = "Not actual";
        } else {
            $dayLeft   = round(($text['time_over'] - time()) / (60 * 60 * 24));
            $endNumber = substr($dayLeft, (strlen($dayLeft) - 1));
            if ($dayLeft > 4 && $dayLeft < 21) {
                $dayLeft .= " дней";
            } elseif ($endNumber == 1 ) {
                $dayLeft .= " день";
            } elseif ($endNumber == 2 || $endNumber == 3 || $endNumber == 4) {
                $dayLeft .= " дня";
            } else {
                $dayLeft .= " дней";
            }
        }

        $content = render(
            TEMPLATE . "editMess",
            [
                "categories" => $categories,
                "types"      => $types,
                "text"       => $text,
                "dayLeft"    => $dayLeft
            ]
        );
    }
    else {
        $text    = "Access denied";
        $content = render(TEMPLATE . "error", ["text" => $text]);
    }
}
