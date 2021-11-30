<h3 class="title_page">Личные Объявления</h3>
<?php if ($_SESSION['msg']) : ?>
    <?= $_SESSION['msg'] ?>
    <?php unset($_SESSION['msg']); ?>
<?php endif; ?>
<?php if ($text) : ?>
    <?php foreach ($text as $item) : ?>
        <div class="t_mess">
            <h4 class="title_p_mess"><a href="?action=viewMess&amp;id=<?= $item['id'] ?>"><?= $item['title'] ?></a>
            </h4>
            <?php if ($item['confirm'] == 0) : ?>
                <p class="not_confirm"><strong>Еще не подтверждено модератором</strong></p>
            <?php endif; ?>
            <?php if ($item['is_actual'] == 0) : ?>
                <p class="not_actual"><strong>Уже не актуально</strong></p>
            <?php endif; ?>
            <p class="p_mess_cat">
                <strong>Категория:</strong> <?= $item['cat'] ?> |
                <strong>Тип объявления:</strong> <?= $item['razd'] ?> |
                <strong>Город:</strong> <?= $item['town'] ?> </p>
            <p class="p_mess_cat">
                <strong>Дата добавления объявления:</strong> <?= date("d.m.Y", $item['date']) ?> |
                <strong>Цена:</strong> <?= $item['price'] ?> |
                <strong>Автор</strong> <a href="mailto:<?= $item['email'] ?>"><?= $item['uname'] ?></a>
            </p>
            <p>
                <img class="mini_mess" src="<?= SITE_NAME . "/" . MINI . $item['img'] ?>" alt=""><?= nl2br($item['text']) ?>
            </p>

            <form method="post">
                Период актуальности объявления:<br/>
                <select name="time">
                    <option value="10">10 дней</option>
                    <option value="15">15 дней</option>
                    <option value="20">20 дней</option>
                    <option value="30">30 дней</option>
                </select>
                <input type="hidden" value="<?= $item['id'] ?>">
                <input type="submit" value="Ok">
                &nbsp;|&nbsp;<a href="?action=editMess&amp;id=<?= $item['id'] ?>">Изменить</a>
                &nbsp;|&nbsp;<a href="?action=pMess&amp;delete=<?= $item['id'] ?>">Удалить</a>
            </form>
        </div>
    <?php endforeach; ?>
<?php endif; ?>.
