<h1>Новое объявление</h1>
<form method='POST' enctype="multipart/form-data">
    Тема:<br>
    <input type='text' name='title' value="<?= $_SESSION['p']['title'] ?>">
    <br>
    Текст:<br>
    <textarea name="text"><?= $_SESSION['p']['text'] ?></textarea>
    <br>
    Категории:<br/>
    <select name="id_categories">
        <?php if ($categories) : ?>
            <?php foreach ($categories as $key => $item) : ?>
                <optgroup label="<?= $item[0] ?>">
                    <?php foreach ($item['next'] as $k => $v) : ?>
                        <option value="<?= $k ?>">--<?= $v ?></option>
                    <?php endforeach; ?>
                </optgroup>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>
    <br/>

    Выберите тип объявления:<br/>
    <?php if ($types) : ?>
        <?php foreach ($types as $item) : ?>
            <label>
                <input type="radio" name="id_razd" value="<?= $item['id'] ?>"><?= $item['name'] ?>
            </label>
        <?php endforeach; ?>
    <?php endif; ?>

    <br/>

    Город:<br>
    <input type='text' name='town' value="<?= $_SESSION['p']['town'] ?>">
    <br>

    Основное изображение:<br>
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
    <input type='file' name='img'><br/>
    Дополнительные изображения:<br>
    <input type='file' name='mini[]'><br/>
    <input type='file' name='mini[]'>
    <br/><br/>

    Период актуальности объявления:<br/>
    <select name="time">
        <option value="10">10 дней</option>
        <option value="15">15 дней</option>
        <option value="20">20 дней</option>
        <option value="30">30 дней</option>
    </select>
    <br/>

    Цена:<br>
    <input type='text' name='price' value="<?= $_SESSION['p']['price'] ?>">
    <br>

    Введите строку:<br>
    <img src="capcha.php" alt="captcha"><br/><br/><input type='text' name='capcha'>
    <br>

    <input type='submit' name='reg' value='Добавить'>
</form>
<?php unset($_SESSION['p'])?>
