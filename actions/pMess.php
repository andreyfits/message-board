<?php

if(!$user) {
    $text    = "Доступ запрещен";
    $content = render(TEMPLATE."error", ["text"=>$text]);
}
else {

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
