<?php

header("Content-Type:text/html;charset=UTF-8");

session_start();

require_once "config.php";
require_once "functions.php";

connectDb();

$categories = getCategories();
$section = getSection();
$user = checkUser();

if ($user) {
    $addMess = can($user['id_role'], ['ADD_MESS']);
}
$action = clearStr($_GET['action']);

if (!$action) {
    $action = "main";
}

if (file_exists(ACTIONS . $action . ".php")) {
    require_once ACTIONS . $action . ".php";
} else {
    require_once ACTIONS . "main.php";
}

require_once TEMPLATE . "index.php";
