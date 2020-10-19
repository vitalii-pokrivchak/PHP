<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Day in Month</title>
    <style>
        body {
            height: 100vh;
            width: 100%;
        }
    </style>
</head>
<body>


<div class="container p-5 w-100 h-100 d-flex justify-content-center flex-column align-items-center">

    <form action="day_in_month.php" method="GET" class="form">
        <input type="number" name="year" id="year" step="1" min="2020" value="2020" class="form-control shadow-sm mb-3">

        <select name="month" id="month" class="form-control shadow-sm">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select>


        <button type="submit" class="btn btn-primary shadow-sm mt-4 w-100">Send</button>

    </form>


    <div class="container w-100 text-center">

        <?php

        $month_arr = array(
            1 => "January",
            2 => "February",
            3 => "March",
            4 => "April",
            5 => "May",
            6 => "June",
            7 => "July",
            8 => "August",
            9 => "September",
            10 => "October",
            11 => "November",
            12 => "December",
        );

        $year = $_GET['year'];
        $month = $_GET['month'];

        if (isset($year) && isset($month)) { # $year !== NULL && $month !== NULL
            $year_leap = ($year % 4) || (($year % 100 === 0) && ($year % 400)) ? 0 : 1; # lambda expression

            if ($year_leap) { # $year_leap === true
                echo '<h4 class="text-success mt-4 font-weight-bold leap">Year ' . $year . ' is leap.</h4>';
            } else {
                echo '<h4 class="text-danger mt-4 font-weight-bold leap">Year ' . $year . ' is not leap.</h4>';
            }

            $daysInMonth = 31 - (($month == 2) ? (3 - $year_leap) : (($month - 1) % 7 % 2)); # lambda expression
            echo '<h5 class="text-muted mt-2 days">In ' . $month_arr[$month] . ' <b>' . $daysInMonth . '</b>' . ' days.' . '</h5>';
        }

        ?>

    </div>


</div>

</body>
</html>