<ul style="list-style-type: none;">
    <?php if (is_array($files) && isset($files)) : ?>
        <?php foreach ($files as $file) : ?>
            <li style="padding:10px;">
            <?php if(file_exists(ICONS_FULL_PATH.$file['extension'].".svg")): ?>
                    <img src="<?= sprintf("%s%s.svg", ICONS_PATH, $file['extension']); ?>" alt="" height="50px">
            <?php else:?>
                <img src="<?= sprintf("%s%s.svg", "/icons/", "default") ?>" alt="" height="50px">
            <?php endif;?>
                <p><?= $file['filename'];?></p>
                <p><?= $file['size'];?></p>
                <p><?= $file['last_updated']?></p>
            <?php endforeach; ?>
            </li>
        <?php endif; ?>
</ul>