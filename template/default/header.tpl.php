<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?= TEMPLATE ?>css/style.css">
    <title><?= SITE_NAME_HEADER ?></title>
</head>
<body>
<div id="karkas">
    <div id="header">
        <h2><a href="<?= SITE_NAME ?>"><?= SITE_NAME_HEADER ?></a></h2>
        <div id="auth">
            <?php if (!$user) : ?>
                <a href="?action=login">Вход</a>
                |
                <a href="?action=registration">Регистрация</a>
            <?php else : ?>
                Добро пожаловать[<?= $user['name'] ?>]
                |
                <a href="?action=login&logout=1">Выход</a>
            <?php endif; ?>
        </div>
    </div>
