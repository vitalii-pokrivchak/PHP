<?php
require_once "./config.php";
require_once "./core.php";

$days = 0;
$leap_year = false;
$visibility = false;
if (isset($_POST['btn'])) {
    $year = (int)$_POST['year'];
    $month = (int)$_POST['month'];
    if (isset($year) && isset($month)) {
        $leap_year = is_leap_year($year);
        $days = get_days_in_month($leap_year, $month);
        $visibility = true;
    }
}

require_once VIEWS_PATH . "master.view.php";
