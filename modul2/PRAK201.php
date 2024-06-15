<html>
<head>
  <title>PRAK201</title>
</head>
<body>
  <form method="post">
    <label for="nama1">Nama: 1</label>
    <input type="text" name="nama1" id="nama1"><br>
    <label for="nama2">Nama: 2</label>
    <input type="text" name="nama2" id="nama2"><br>
    <label for="nama3">Nama: 3</label>
    <input type="text" name="nama3" id="nama3"><br>
    <button name="submit" type="submit">Urutkan</button>
  </form>
  <?php
  if (isset($_POST["submit"])) {
    $nama1 = $_POST["nama1"];
    $nama2 = $_POST["nama2"];
    $nama3 = $_POST["nama3"];
    if ($nama1 > $nama2 && $nama2 > $nama3) {
      echo $nama3 . "<br>" . $nama2 . "<br>" . $nama1;
    } elseif ($nama1 > $nama3 && $nama3 > $nama2) {
      echo $nama1 . "<br>" . $nama3 . "<br>" . $nama2;
    } elseif ($nama2 > $nama1 && $nama1 > $nama3) {
      echo $nama3 . "<br>" . $nama1 . "<br>" . $nama2;
    } elseif ($nama2 > $nama3 && $nama3 > $nama1) {
      echo $nama1 . "<br>" . $nama3 . "<br>" . $nama2;
    } elseif ($nama3 > $nama1 && $nama1 > $nama2) {
      echo $nama2 . "<br>" . $nama1 . "<br>" . $nama3;
    } else {
      echo $nama1 . "<br>" . $nama2 . "<br>" . $nama3;
    }
  }
  ?>
</body>
</html>