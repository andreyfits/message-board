<h1>Введите свой почтовый адрес</h1>
<?= $_SESSION['msg'] ?>
<?php unset($_SESSION['msg']); ?>
<form method="post">
    <label>
        EMAIL<br>
        <input type='text' name='email'>
    </label><br>
    <input style="float:left;" type='submit' value='Вход'>
</form>
