<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lvl1 task2</title>
</head>
<body>
<table>

<H1>INPUT</H1>

<br>
    <form action="" method="post">
        <tr>
            <td><label for="bil1">BIL 1 </label></td>
            <td><input type="number" name="bil1" ></td>
        </tr>
        <tr>
            <td><label for="bil2">BIL 2 </label></td>
            <td><input type="number" name="bil2" ></td>
        </tr>
        <tr>
            <td><label for="bil3">BIL 3 </label></td>
            <td><input type="number" name="bil3" ></td>
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
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];  
$bil3 = $_POST['bil3'];

if ($bil1 > $bil2) {
    if ($bil1 > $bil3) {
        $terbesar = $bil1;
    } else {
        $terbesar = $bil3;
    }
} else {
    if ($bil2 > $bil3) {
        $terbesar = $bil2;
    } else {
        $terbesar = $bil3;
    }
}
echo "nilai terbesar :" . $terbesar;
}
?>

