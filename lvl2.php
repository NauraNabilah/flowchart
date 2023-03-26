<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table>

    <H1>INPUT</H1>

    <br>
    <form action="" method="post">
      <?php
      for ($jumlahAngka = 0; $jumlahAngka <= 99; $jumlahAngka++) {
        echo '<tr>
            <td><label for="bilangan">input ke ' . $jumlahAngka . '</label></td>
            <td><input type="number" name="bilangan[' . $jumlahAngka . ']" ></td>
        </tr>';
      }
      ?>
      <tr>
        <td><button type="submit" name="submit">INPUT</button></td>
      </tr>
    </form>
  </table>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
  $angkaMax = 0;
  for ($jumlahAngka = 0; $jumlahAngka <= 99; $jumlahAngka++) {
    $angka = $_POST['bilangan'][$jumlahAngka];
    if ($angka > $angkaMax) {
      $angkaMax = $angka;
    }
  }
  echo $angkaMax;
}
?>