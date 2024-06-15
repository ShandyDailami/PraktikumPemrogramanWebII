<?php
if(isset($_POST["submit"])) {
  $from = $_POST["from"];
  $to = $_POST["to"];
  $nilai = $_POST["nilai"];
  $hasil = '';
  $derajat = '';
  if($from == 'celcius' && $to == 'celcius') {
    $hasil = $nilai;
    $derajat = 'C';
  } elseif($from == 'celcius' && $to == 'fahrenheit') {
    $hasil = (9/5) * $nilai + 32;
    $derajat = 'F';
  } elseif($from == 'celcius' && $to == 'rheamur') {
    $hasil = (4/5) * $nilai;
    $derajat = 'R';
  } elseif($from == 'celcius' && $to == 'kelvin') {
    $hasil = 273 + $nilai;
    $derajat = 'K';
  } elseif($from == 'fahrenheit' && $to == 'celcius') {
    $hasil = number_format(5/9 * ($nilai - 32), 4);
    $derajat = 'C';
  } elseif($from == 'fahrenheit' && $to == 'fahrenheit') {
    $hasil = $nilai;
    $derajat = 'F';
  } elseif($from == 'fahrenheit' && $to == 'rheamur') {
    $hasil = number_format(4/9 * ($nilai - 32), 4);
    $derajat = 'R';
  } elseif($from == 'fahrenheit' && $to == 'kelvin') {
    $hasil = number_format(($nilai - 32) * 5/9 + 273, 4);
    $derajat = 'K';
  } elseif($from == 'rheamur' && $to == 'celcius') {
    $hasil = number_format($nilai * (5/4), 4);
    $derajat = 'C';
  } elseif($from == 'rheamur' && $to == 'fahrenheit') {
    $hasil = number_format(32 + $nilai * (9/4), 4);
    $derajat = 'F';
  } elseif($from == 'rheamur' && $to == 'rheamur') {
    $hasil = $nilai;
    $derajat = 'R';
  } elseif($from == 'rheamur' && $to == 'kelvin') {
    $hasil = (5/4) * $nilai + 273;
    $derajat = 'K';
  } elseif($from == 'kelvin' && $to == 'celcius') {
    $hasil = $nilai - 273;
    $derajat = 'C';
  } elseif($from == 'kelvin' && $to == 'fahrenheit') {
    $hasil = 9/5 * ($nilai - 273) + 32;
    $derajat = 'F';
  } elseif($from == 'kelvin' && $to == 'rheamur') {
    $hasil = 4/5 * ($nilai - 732) + 32;
    $derajat = 'F';
  } else {
    $hasil = $nilai;
    $derajat = 'K';
  }
}
?>
<html>
<head>
  <title>PRAK203</title>
</head>
<body>
  <span>Output yang dinginkan</span>
  <form method="post">
    <label for="nilai">Nilai : </label>
    <input type="text" id="nilai" name="nilai"> <br>
    <span>Dari : </span><br>
    <input type="radio" name="from" id="celcius" value="celcius">
    <label for="celcius">Celcius</label><br>
    <input type="radio" name="from" id="fahrenheit" value="fahrenheit">
    <label for="fahrenheit">Fahrenheit</label><br>
    <input type="radio" name="from" id="rheamur" value="rheamur">
    <label for="rheamur">Rheamur</label><br>
    <input type="radio" name="from" id="kelvin" value="kelvin">
    <label for="kelvin">Kelvin</label><br>
    <label for="">Ke : </label><br>
    <input type="radio" name="to" id="toCelcius" value="celcius">
    <label for="toCelcius">Celcius</label><br>
    <input type="radio" name="to" id="toFahrenheit" value="fahrenheit">
    <label for="toFahrenheit">Fahrenheit</label><br>
    <input type="radio" name="to" id="toRheamur" value="rheamur">
    <label for="toRheamur">Rheamur</label><br>
    <input type="radio" name="to" id="toKelvin" value="kelvin">
    <label for="toKelvin">Kelvin</label><br>
    <button type="submit" name="submit">Konversi</button>
  </form>
  <?php
  global $hasil;
  global $derajat;
  echo "<h2>Hasil Konversi: $hasil $derajat&deg;</h2>"
  ?>
</body>
</html>