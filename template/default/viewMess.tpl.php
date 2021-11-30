<h3 class="title_page"><?= $text['title'] ?></h3>
<?php if ($_SESSION['msg']) : ?>
    <?= $_SESSION['msg'] ?>
    <?php unset($_SESSION['msg']); ?>
<?php endif; ?>
<?php if ($text) : ?>
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
            <strong>Категория:</strong> <?= $text['cat'] ?> |
            <strong>Тип объявления:</strong> <?= $text['razd'] ?> |
            <strong>Город:</strong> <?= $text['town'] ?> </p>
        <p class="p_mess_cat">
            <strong>Дата добавления объявления:</strong> <?= date("d.m.Y", $text['date']) ?> |
            <strong>Цена:</strong> <?= $text['price'] ?> |
            <strong>Автор</strong> <a href="mailto:<?= $text['email'] ?>"><?= $text['uname'] ?></a>
        </p>
        <p>
            <img class="mini_mess" src="<?= SITE_NAME . "/" . MINI . $text['img'] ?>" alt=""><?= nl2br($text['text']) ?>
        </p>
        <?php if ($imgS && is_array($imgS)) : ?>
            <?php foreach($imgS as $item) : ?>
                <img src="<?= SITE_NAME . "/" . MINI . $item ?>" alt="">
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>
