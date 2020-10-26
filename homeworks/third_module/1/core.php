<?php

/**
 * is_leap_year
 *
 * @param  integer $year
 * @return bool|null
 */

function is_leap_year($year)
{
    if ($year !== null && is_integer($year))
        return ($year % 4) || (($year % 100 === 0) && ($year % 400)) ? 0 : 1;
    return null;
}


/**
 * get_days_in_month
 *
 * @param  bool|integer $leap_year
 * @param  integer $month
 * @return integer|null
 */
function get_days_in_month($leap_year, $month)
{
    if ($leap_year !== null && $month !== null && is_integer($month))
        return  31 - (($month == 2) ? (3 - $leap_year) : (($month - 1) % 7 % 2));
    return null;
}
