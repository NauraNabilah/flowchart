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
</body>
</html>

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
</center>
</table>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    
if ($a > $b) {
    if ($a > $c) {
        if ($b > $c) {
            $sisiMin = $c;
            $sisiTengah = $b;
            $sisiMax = $a;
        } else {
            $sisiMin = $b;
            $sisiTengah = $c;
            $sisiMax = $a;
        }
    } else {
        $sisiMin = $b;
        $sisiTengah = $a;
        $sisiMax = $c;
    }
} else {
    if ($b > $c) {
        if ($b > $c) {
            $sisiMin = $c;
            $sisiTengah = $a;
            $sisiMax = $b;
        } else {
            $sisiMin = $a;
            $sisiTengah = $c;
            $sisiMax = $b;
        }
    } else {
        $sisiMin = $a;
        $sisiTengah = $b;
        $sisiMax = $c;
    }
}
if ($sisiMin == $sisiTengah && $sisiMin == $sisiMax) {
    echo "SAMA SISI";
} else {
    if ($sisiMin == $sisiTengah || $sisiTengah == $sisiMax || $sisiMin == $sisiMax) {
        echo "SAMA KAKI";
    } else {
        echo "SEMBARANG";
    }
}
}
?>
