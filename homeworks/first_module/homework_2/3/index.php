<?php require_once __DIR__."/config.php"; ?>
<table cellpadding="3px" cellspacing="0px" border="1px">
    <?php for($i = 1;$i <= MAX_FIRST_NUM;$i++):?>
        <tr>
            <?php for($j = 1;$j <= MAX_SECOND_NUM;$j++):?>
                <td><?= $i ?> * <?= $j ?> = <?= $i * $j ?></td>
            <?php endfor;?>
        </tr>
    <?php endfor;?>
</table>