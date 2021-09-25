<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Sssyka</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <div class="wrapper">
    <form action="connect.php" method="post">
        <div>
            <label class="title">Name</label>
            <input type="text" name="name" class="inp">
        </div>
        <div>
            <label class="title">Rate</label>
            <input type="text" name="rate" id="rate" class="inp">
        </div>
        <div>
            <label class="title">Max loan</label>
            <input type="text" name="maxloan" id="maxloan" class="inp">
        </div>
        <div>
            <label class="title">Min down payment</label>
            <input type="text" name="minpay" id="minpay" class="inp">
        </div>
        <div>
            <label class="title">Loan term</label>
            <input type="text" name="term" id="term" class="inp">
        </div>       
        <button class="button" type="submit">Create</button>
        
    </form>
    </div>
    <div class="title">
        <a href="calc.php" target="blank">Mortgage calculator</a>
    </div>
</body>

</html>