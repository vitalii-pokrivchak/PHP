<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<style>
    body {
        height: 100vh;
        width: 100%;
    }
</style>
<body>


<div class="container d-flex flex-column justify-content-center align-items-center w-100 h-100">
    <form action="palindrome.php" method="GET" class="text-center">
        <label for="text" class="font-weight-bold" style="font-size:25px;">Palindrome</label>
        <input required type="text" name="text" id="text" placeholder="Enter word here" class="form-control">
        <button type="submit" class="btn btn-dark mt-3 w-100">Send</button>
    </form>


    <div class="container text-center mt-4 w-100">
        <?php

        $word = $_GET['text']; # get data from super global array

        if (isset($word)) { # $word !== NULL
            $result = ''; # variable to record the result
            for ($i = strlen($word); $i >= 0; $i--) { # loop
                $result .= $word[$i]; # append to $result reverse $word
            }

            if ($result === $word) {
                echo '<h3 class="text-primary font-weight-bold">' . ' You word ' . '<i> "' . $word . '"</i>' . ' is a palindrome. ' . '</h3>';
            } else {
                echo '<h3 class="text-danger font-weight-bold">' . ' You word ' . '<i> "' . $word . '"</i>' . ' is not a palindrome. ' . '</h3>';
            }
        }

        ?>

    </div>
</div>
</body>
</html>