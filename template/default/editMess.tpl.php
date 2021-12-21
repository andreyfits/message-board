<h1><?= $text['title'] ?></h1>
<?php if ($_SESSION['msg']): ?>
    <?= $_SESSION['msg'] ?>
    <?php unset($_SESSION['msg']); ?>
<?php endif; ?>
<?php if (is_array($text)): ?>
<?php if ($text['is_actual'] == 0): ?>
    <p class="not_confirm"><strong>Not actual</strong></p>
<?php endif; ?>
<form method='POST' enctype="multipart/form-data">
    Тема:<br>
    <input type='text' name='title' value="<?= $text['title'] ?>">
    <input type='hidden' name='id' value="<?= $text['id'] ?>">
    <br>
    Текст:<br>
    <textarea name="text"><?= $text['text'] ?></textarea>
    <br>
    Категории:<br/>
    <select name="id_categories">
        <?php if ($categories) : ?>
            <?php foreach ($categories as $key => $item) : ?>
                <optgroup label="<?= $item[0] ?>">
                    <?php foreach ($item['next'] as $k => $v) : ?>
                        <?php if ($text['id_categories'] == $k): ?>
                            <option selected value="<?= $k ?>">--<?= $v ?></option>
                        <?php else: ?>
                            <option value="<?= $k ?>">--<?= $v ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </optgroup>
            <?php endforeach; ?>
        <?php endif; ?>
    </select>
    <br/>

    Выберите тип объявления:<br/>
    <?php if ($types) : ?>
        <?php foreach ($types as $item) : ?>
            <?php if ($text['id_razd'] == $item['id']): ?>
                <label>
                    <input checked type="radio" name="id_razd" value="<?= $item['id'] ?>"><?= $item['name'] ?>
                </label>
            <?php else: ?>
                <label>
                    <input type="radio" name="id_razd" value="<?= $item['id'] ?>"><?= $item['name'] ?>
                </label>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <br/>

    Город:<br>
    <input type='text' name='town' value="<?= $text['town'] ?>">
    <br>

    Основное изображение:<br>
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
    <input type='file' name='img'><br/>
    <img class="img" width="80px" src="<?=SITE_NAME . "/" . MINI . $text['img'] ?>">
    Дополнительные изображения:<br>
    <input type='file' name='mini[]'><br/>
    <input type='file' name='mini[]'>
    <br/>
    <?php foreach (explode("|", $text['img_s']) as $item) : ?>
        <img class="img" width="80px" src="<?=SITE_NAME . "/" . MINI . $item ?>">
    <?php endforeach; ?>
    <br/>
    Период актуальности объявления(
        <?php if ($dayLeft < 0 || $text['is_actual'] == 0): ?>
            не актуально <?= $dayLeft ?>
        <?php else: ?>
            актуально еще <?= $dayLeft ?>
        <?php endif; ?>):<br/>
    <select name="time">
        <option value="10">10 дней</option>
        <option value="15">15 дней</option>
        <option value="20">20 дней</option>
        <option value="30">30 дней</option>
    </select>
    <br/>
    Цена:<br>
    <input type='text' name='price' value="<?= $text['price'] ?>">
    <br>

    Введите строку:<br>
    <img src="capcha.php" alt="captcha"><br/><br/><input type='text' name='capcha'>
    <br>

    <input type='submit' name='reg' value='Добавить'>
</form>
<?php else : ?>
<p>Данного текста нет!</p>
<?php endif; ?>
