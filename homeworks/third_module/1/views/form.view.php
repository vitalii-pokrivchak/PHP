<form action="index.php" method="POST" class="form">
    <input type="number" name="year" id="year" step="1" min="2020" value="<?= $year ?>" class="form-control shadow-sm mb-3">
    <select name="month" id="month" class="form-control shadow-sm">
        <option value="<?= $month ?>" selected><?= $month_arr[$month] ?></option>
        <?php foreach ($month_arr as $key => $value) : ?>
            <?php if ($key !== $month) : ?>
                <option value="<?= $key ?>"><?= $value ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select>
    <button type="submit" class="btn btn-primary shadow-sm mt-4 w-100" name="btn">Send</button>
</form>