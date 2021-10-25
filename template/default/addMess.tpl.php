<h1>Новое объявление</h1>
<form method='POST' enctype="multipart/form-data">
    Тема:<br>
    <label>
        <input type='text' name='title' value="<?= $_SESSION['p']['title'] ?>">
    </label>
    <br>
    Текст:<br>
    <label>
        <textarea name="text"><?= $_SESSION['p']['text'] ?></textarea>
    </label>
    <br>
    Категории:<br/>
    <label>
        <select name="id_categories">
            <optgroup label="<?= $item['0'] ?>">
                <option value="">--</option>
            </optgroup>
        </select>
    </label>
    <br/>

    Выберите тип объявления:<br/>
    <label>
        <input type="radio" name="id_razd" value="">
    </label>
    <br/>

    Город:<br>
    <label>
        <input type='text' name='town' value="<?= $_SESSION['p']['town'] ?>">
    </label>
    <br>

    Основное изображение:<br>
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
    <input type='file' name='img'><br/>
    Дополнительные изображения:<br>
    <input type='file' name='mini[]'><br/>
    <input type='file' name='mini[]'>
    <br/><br/>

    Период актуальности объявления:<br/>
    <label>
        <select name="time">
            <option value="10">10 дней</option>
            <option value="15">15 дней</option>
            <option value="20">20 дней</option>
            <option value="30">30 дней</option>
        </select>
    </label>
    <br/>

    Цена:<br>
    <label>
        <input type='text' name='price' value="<?= $_SESSION['p']['price'] ?>">
    </label>
    <br>

    Введите строку:<br>
    <img src="capcha.php" alt=""><br/><br/><label>
        <input type='text' name='capcha'>
    </label>
    <br>

    <input type='submit' name='reg' value='Добавить'>
</form>
