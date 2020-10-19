<?php require_once __DIR__ . "/config.php"; ?>
<table width="270px" cellspacing="0" cellpadding="0" border="1px">
    <?php for ($row = 1; $row <= TABLE_SIZE; $row++): ?>
        <tr>
            <?php for ($col = 1; $col <= TABLE_SIZE; $col++): ?>
                <?php $total = $row + $col; ?>
                <?php if ($total % 2 == 0): ?>
                    <td height="30px" width="30px" bgcolor="#000000"></td>
                <?php else: ?>
                    <td height="30px" width="30px" bgcolor="#FFFFFF"></td>
                <?php endif; ?>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
