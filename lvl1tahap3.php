<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lvl1 task 3</title>
</head>
<body>
<table>

<H1>INPUT</H1>

<br>
    <form action="" method="post">
        <tr>
            <td><label for="a"> bil1 </label></td>
            <td><input type="number" name="a" ></td>
        </tr>
        <tr>
            <td><label for="b"> bil2 </label></td>
            <td><input type="number" name="b" ></td>
        </tr>
        <tr>
            <td><label for="c"> bil3 </label></td>
            <td><input type="number" name="c" ></td>
        </tr>
        <tr>
            <td><label for="d"> bil4 </label></td>
            <td><input type="number" name="d" ></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">INPUT</button></td>
        </tr>
    </form>
</table>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
if ($a > $b) {
    if ($a > $c) {
        if ($a > $d) {
            echo $a;
        } else {
            echo $d;
        }
    } else {
        if ($c > $d) {
            echo $c;
        } else {
            echo $d;
        }
    }
    echo $a;
} else {
    if ($b > $c) {
        if ($b > $d) {
            echo $b;
        } else {
            echo $d;
        }
    } else {
        if ($c > $d) {
            echo $c;
        } else {
            echo $d;
        }
    }
}
}
?>
