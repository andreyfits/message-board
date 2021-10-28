<div id="menu">
    <ul>
        <?php if ($user) : ?>
            <?php if ($addMess) : ?>
                <li><a href="?action=addMess">Добавить объявление</a></li>
            <?php endif; ?>
            <li><a href="?action=pMess">Ваши объявления</a></li>
        <?php endif; ?>
        <?php if ($types && is_array($types)) : ?>
            <?php foreach ($types as $item) : ?>
                <li><a href="?action=main&amp;id_r=<?= $item['id'] ?>"><?= $item['name'] ?></a></li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
    <div style="clear:both;"></div>
</div>
