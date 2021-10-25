<h1>Регистрация</h1>
<?= $_SESSION['msg'] ?>
<?php unset($_SESSION['msg']); ?>
<form method='POST'>
    Логин<br>
    <label>
        <input type='text' name='reg_login' value="<?= $_SESSION['reg']['login'] ?>">
    </label>
    <br>
    Пароль<br>
    <label>
        <input type='password' name='reg_password'>
    </label>
    <br>
    Подтвердите пароль<br>
    <label>
        <input type='password' name='reg_password_confirm'>
    </label>
    <br>
    Почта<br>
    <label>
        <input type='text' name='reg_email' value="<?= $_SESSION['reg']['email'] ?>">
    </label>
    <br>
    Имя<br>
    <label>
        <input type='text' name='reg_name' value="<?= $_SESSION['reg']['name'] ?>">
    </label>
    <br>
    <input style="float:left;" type='submit' name='reg' value='Регистрация'>
</form>
