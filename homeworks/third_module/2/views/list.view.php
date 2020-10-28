<ul>
    <?php foreach ($files as $file) : ?>
        <?php var_dump($file);?>
        <li>
            <img src="<?= sprintf("%s%s.svg",ICONS,$file->getExtension());?>" alt="">
        </li>
    <?php endforeach; ?>
</ul>