<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<table>

<H1>INPUT</H1>

<br>
    <form action="" method="post">
        <tr>
            <td><label for="a">BIL 1 </label></td>
            <td><input type="number" name="a" ></td>
        </tr>
        <tr>
            <td><label for="b">BIL 2 </label></td>
            <td><input type="number" name="b" ></td>
        </tr>
        <tr>
            <td><label for="c">BIL 3 </label></td>
            <td><input type="number" name="c" ></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">INPUT</button></td>
        </tr>
    </form>
</table>

<?php
if (isset($_POST['submit'])) {
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if ($a > $b) {
    if ($a > $c) {
        if ($b > $c) {
            echo $c . ", " . $b . ", " . $a;
        } else {
            echo $b . ", " . $c . ", " . $a;
        }
    } else {
        echo $b . ", " . $a . ", " . $c;
    }
} else {
    if ($b > $c) {
        if ($b > $c) {
            echo $c . ", " . $a . ", " . $b;
        } else {
            echo $a . ", " . $c . ", " . $b;
        }
    } else {
        echo $a . ", " . $b . ", " . $c;
    }
}
}
?>

