<?php

if (!$user || !can($user['id_role'], ['ADD_MESS'])) {
    $text    = "Доступ запрещен";
    $content = render(TEMPLATE . "error", ["text" => $text]);
} else {
    $content = render(
        TEMPLATE . "addMess",
        [
            "categories" => $categories,
            "types"      => $types
        ]
    );
}
