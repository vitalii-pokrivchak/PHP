<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel Count</title>
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

<div class="container d-flex justify-content-center flex-column align-items-center w-100 h-100">
    <form action="vowelCount.php" method="GET" class="text-center">
        <label for="text" class="font-weight-bold" style="font-size:25px;">Vowel Count</label>
        <input required type="text" name="word" id="input_word" class="form-control rounded-lg shadow-sm"
               placeholder="Enter your word">
        <button type="submit" class="btn btn-primary rounded-lg mt-2 w-100 rounded-lg shadow-sm">Submit</button>
    </form>
    <?php $word = $_GET['word']; # get data from super global array ?>
    <?php if (isset($word))  : # $word !== NULL ?>
        <?php

        $counter = 0; # variable for vowel count
        $vowel = [
            'a', 'e', 'i', 'o', 'u'
        ]; # array for vowel characters

        for ($i = 0; $i < strlen($word); $i++) {
            foreach ($vowel as $v) {
                if ($word[$i] === $v) {
                    $counter++; // $counter += 1;
                }
            }
        }

        ?>
        <h4 class="font-weight-bold mt-3 text-success">You word "<?= $word ?>" contains <?= $counter ?> vowels.</h4>
    <?php endif; ?>
</div>


</body>
</html>