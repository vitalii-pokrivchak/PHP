<?php require_once __DIR__."/config.php"; ?>
<table border="1px" style="border-collapse: collapse">
<?php for($row = 1;$row <= COUNT;$row++):?>
    <tr>
        <?php for($col = 1;$col <= COUNT;$col++):?>
            <?php $number = $col * $row;?>
            <td><?= $number ?></td>
        <?php endfor;?>
    </tr>
<?php endfor; ?>
</table>
