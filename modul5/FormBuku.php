<?php
  require 'Koneksi.php';
  require 'Model.php';
  $buku = [
    "id_buku" => "",
    "judul_buku" => "",
    "penulis" => "",
    "penerbit" => "",
    "tahun_terbit" => ""
];
  $id = "";
  if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    if ($id > 0) {
        $result = tampil("SELECT * FROM buku WHERE id_buku = $id");
        if (!empty($result)) {
            $buku = $result[0];
        }
    }
  }
  if (isset($_POST["submit"])) {
    if (empty($_POST["id"])) {
        tambahBuku($_POST);
    } else {
        ubahBuku($_POST);
    }
    header("Location: Buku.php");
    exit();
}
?>
<!doctype html>
<html>
<head>
  <title>Halaman Tambah Buku</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="font-poppins">
  <nav class="flex justify-between items-center bg-slate-300 mb-10 h-14 px-4">
    <h1 class="text-3xl font-bold text-black">Halaman Tambah Buku</h1>
    <a href="Member.php" class="text-black">back</a>
  </nav>
  <main class="flex justify-center h-screen items-center">
    <form action="" method="post" class="border border-gray-300 rounded-sm w-1/2 p-5 flex flex-col">
    <input type="hidden" name="id" value="<?= htmlspecialchars($buku["id_buku"]) ?>">
      <div>
        <label for="id">ID Buku</label><br>
        <input <?= !empty($buku["id_buku"]) ? 'disabled' : '' ?> value="<?= $buku["id_buku"] ?>" class="border border-gray-300 rounded-sm w-full h-10 mb-5 p-3" type="text" name="id" id="id">
      </div>
      <div class="mb-5">
        <label for="judul">Judul Buku</label><br>
        <input value="<?= $buku["judul_buku"] ?>" class="border border-gray-300 rounded-sm w-full h-10 p-3" type="text" name="judul" id="judul">
      </div>
      <div class="mb-5">
        <label for="penulis">Penulis</label><br>
        <input value="<?= $buku["penulis"] ?>" class="border border-gray-300 rounded-sm w-full h-10 p-3" type="text" name="penulis" id="penulis">
      </div>
      <div class="mb-5">
        <label for="penerbit">Penerbit</label><br>
        <input value="<?= $buku["penerbit"] ?>" class="border border-gray-300 rounded-sm w-full h-10 p-3" type="text" name="penerbit" id="penerbit">
      </div>
      <div class="mb-5">
        <label for="tahun">Tahun Terbit</label><br>
        <input value="<?= $buku["tahun_terbit"] ?>" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="border  border-gray-300 rounded-sm w-full h-10 p-3" type="text" name="tahun" id="tahun">
      </div>
      <button class="bg-blue-500 text-white py-2 rounded-sm" type="submit" name="submit">Submit</button>
    </form>
  </main>
</body>
</html>