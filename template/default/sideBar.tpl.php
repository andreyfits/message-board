<div>
    <h3>Категории</h3>
    <ul class="categories">
        <strong>
            <li>Транспорт</li>
        </strong>
        <ul>
            <li>- <a href="http://localhost/doska/?action=categories&amp;id=5">Автомобили</a></li>
            <li>- <a href="http://localhost/doska/?action=categories&amp;id=6">Мото</a></li>
        </ul>
        <strong>
            <li>Интернет</li>
        </strong>
        <ul>
            <li>- <a href="http://localhost/doska/?action=categories&amp;id=7">Компьютеры</a></li>
            <li>- <a href="http://localhost/doska/?action=categories&amp;id=8">Игры</a></li>
        </ul>
        <strong>
            <li>Дом</li>
        </strong>
        <ul>
            <li>- <a href="http://localhost/doska/?action=categories&amp;id=9">Мебель</a></li>
            <li>- <a href="http://localhost/doska/?action=categories&amp;id=10">Сантехника</a></li>
        </ul>
        <strong>
            <li>Сад, огород</li>
        </strong>
        <ul>
            <li>- <a href="http://localhost/doska/?action=categories&amp;id=11">Интсрумент</a></li>
            <li>- <a href="http://localhost/doska/?action=categories&amp;id=12">Строй материалы</a></li>
        </ul>

    </ul>
</div>

<div>
    <h3>Поиск</h3>
    <form method="GET" action="?action=search">
        <input name="action" value="search" type="hidden">
        Поиск<br>
        <input name="search" type="text">
        <br>
        <br>
        Категория:<br>
        <select name="id_categories">
            <option selected="selected" value="">Выберите категорию</option>
            <optgroup label="Транспорт">
                <option value="5">--Автомобили</option>
                <option value="6">--Мото</option>
            </optgroup>
            <optgroup label="Интернет">
                <option value="7">--Компьютеры</option>
                <option value="8">--Игры</option>
            </optgroup>
            <optgroup label="Дом">
                <option value="9">--Мебель</option>
                <option value="10">--Сантехника</option>
            </optgroup>
            <optgroup label="Сад, огород">
                <option value="11">--Интсрумент</option>
                <option value="12">--Строй материалы</option>
            </optgroup>
        </select>
        <br>
        <br>
        Тип объявления:<br>
        <input name="id_razd" value="1" type="radio">Предложение
        <input name="id_razd" value="2" type="radio">Спрос
        <br><br>
        Диапазон цен:<br>
        От <input name="p_min" class="p_search" type="text"> До <input name="p_max" class="p_search" type="text">
        <br><br>
        <input value="Поиск" type="submit">
    </form>
</div>