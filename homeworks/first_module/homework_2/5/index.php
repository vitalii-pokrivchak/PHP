<?php
$temperatures = [
    78, 60, 62, 68, 71, 68,
    73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
    62, 62, 65, 64, 68, 73, 75, 79, 73
];
$total = 0;
$average = 0;
?>

<?php foreach ($temperatures as $temperature) {
    $total += $temperature;
} ?>

<?php $average = $total / count($temperatures); ?>
<h3>Average Temperature is : <b><?= $average ?></b></h3>
<?php sort($temperatures); ?>
<h3>List of seven lowest temperatures :
    <?php for ($i = 0; $i <= 7; $i++): ?>
        <?php if ($i !== 7): ?>
            <?= $temperatures[$i] . ' , ' ?>
        <?php else: ?>
            <?= $temperatures[$i] . ' . ' ?>
        <?php endif; ?>
    <?php endfor; ?>
</h3>
<h3>List of seven highest temperatures :
    <?php for ($j = (count($temperatures) - 7); $j < count($temperatures); $j++): ?>
        <?php if ($j !== 29): ?>
            <?= $temperatures[$j] . ' , ' ?>
        <?php else: ?>
            <?= $temperatures[$j] . ' . ' ?>
        <?php endif; ?>
    <?php endfor; ?>
</h3>
