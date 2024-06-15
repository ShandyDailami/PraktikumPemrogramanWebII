<?php
  if(isset($_POST["submit"])) {
    $nilai = $_POST["nilai"];
    $hasil = "";
    if($nilai == 0) {
      $hasil = "Nol";
    } elseif($nilai <= 10) {
      $hasil = "Satuan";
    } elseif($nilai <= 20) {
      $hasil = "Belasan";
    } elseif($nilai <= 999) {
      $hasil = "Ratusan";
    } else {
      $hasil = "Anda Menginput Melebihi Limit Bilangan";
    }
  }
?>
<html>
<head>
  <title>PRAK204</title>
</head>
<body>
  <form method="post">
  <label for="nilai">Nilai : </label>
  <input type="text" id="nilai" name="nilai" value="<?= $nilai ?>"><br>
  <button type="submit" name="submit">Konversi</button>
  </form>
  <?php
    global $hasil;
    echo"<h2>Hasil: $hasil</h2>"
  ?>
</body>
</html>