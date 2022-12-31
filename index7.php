<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maximum between Two Numbers</title>
</head>
<body>
    <h1>Show Maximum Between Two Numbers</h1>
    <form action="#" method="POST">
        <label>Enter your First number</label>
        <input type="text" name="n1">
        <label>Enter your Second number</label>
        <input type="text" name="n2">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    if($n1>$n2)
        echo $n1 . " is the greater number";
    else
        echo $n2 . " is the greater number";
    }
?>
