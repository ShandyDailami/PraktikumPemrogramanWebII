<?php
$listSamsung = [
  "S22" => "Samsung Galaxy S22",
  "S22+" => "Samsung Galaxy S22+",
  "A03" => "Samsung Galaxy A03",
  "X5" => "Samsung Galaxy Xcover 5"
];
?>
<html>
  <head>
    <title>PRAK105</title>
  </head>
  <style>
    table, th, td {
      border: 1px solid black;
    }
    .head {
      padding: 20px 0;
      background-color: red;
      font-size: 1.5rem;
    }
  </style>
  <body>
    <table>
      <tr>
        <td class="head"><strong>Daftar Smartphone Samsung</strong></td>
      </tr>
      <tr>
        <td><?= $listSamsung["S22"] ?></td>
      </tr>
      <tr>
        <td><?= $listSamsung["S22+"] ?></td>
      </tr>
      <tr>
        <td><?= $listSamsung["A03"] ?></td>
      </tr>
      <tr>
        <td><?= $listSamsung["X5"] ?></td>
      </tr>
    </table>
  </body>
</html>