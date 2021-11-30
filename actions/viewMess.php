<?php

if ($_GET['id']) {
    $idMess = (int)$_GET['id'];
}

$text = getVMess($idMess);
$imgS = explode("|", $text['img_s']);

$content = render(
    TEMPLATE . "viewMess",
    [
        'text' => $text,
        'imgS' => $imgS
    ]
);
