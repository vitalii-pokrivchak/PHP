<div class="container w-100 text-center">
    <?php if ($visibility) : ?>
        <?php if ($leap_year) : ?>
            <h4 class="text-success mt-4 font-weight-bold">Year <?= $year ?> is leap.</h4>
        <?php else : ?>
            <h4 class="text-danger mt-4 font-weight-bold">Year <?= $year ?> is not leap.</h4>
        <?php endif; ?>
        <h5 class="text-muted mt-2">In <?= $month_arr[$month] ?> <b> <?= $days ?> </b> days.</h5>
    <?php endif; ?>
</div>