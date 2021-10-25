<h1>Авторизуйтесь</h1>
<?= $_SESSION['msg'] ?>
<?php unset($_SESSION['msg']); ?>
<form method='POST'>
    <label>
        login<br>
        <input type='text' name='login'>
    </label><br>
    Password<br>
    <label>
        <input type='password' name='password'>
    </label><br>
    <label>Member
        <input type="checkbox" name='member' value="1">
    </label><br>
    <input style="float:left;" type='submit' value='Вход'>
</form>
<br/>
<p>
    <a href="?action=registration">Регистрация</a> | <a href="?action=returnpass">Забыли пароль?</a>
</p>
