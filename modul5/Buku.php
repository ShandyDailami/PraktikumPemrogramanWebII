<?php
  require 'Koneksi.php';
  require 'Model.php';
  $listBuku = tampil("SELECT * FROM buku");
  if(isset($_GET["id"])){
    hapusBuku($_GET["id"]);
    header("Location: Buku.php");
    exit();
  }
?>
<!doctype html>
<html>
<head>
  <title>Halaman Buku</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    td {
      text-align: center;
    }
  </style>
</head>
<body class="font-poppins">
  <nav class="flex justify-between items-center bg-slate-300 h-14 px-4">
    <h1 class="text-3xl font-bold text-black">Halaman Buku</h1>
    <a href="index.php" class="text-black">back</a>
  </nav>
  <section class="p-4">
    <button class="bg-green-700 text-white py-2 px-6 rounded-sm hover:bg-green-800" onclick="window.location.href='FormBuku.php'">Tambah</button>
  </section>
  <main class="px-4">
    <table class="w-full border-collapse border-y">
      <tr class="bg-yellow-400">
        <th class="py-3">ID Buku</th>
        <th class="py-3">Judul</th>
        <th class="py-3">Penulis</th>
        <th class="py-3">Penerbit</th>
        <th class="py-3">Tahun Terbit</th>
        <th class="py-3"></th>
      </tr>
      <?php foreach($listBuku as $buku) : ?>
      <tr>
        <td><?= $buku["id_buku"] ?></td>
        <td><?= $buku["judul_buku"] ?></td>
        <td><?= $buku["penulis"] ?></td>
        <td><?= $buku["penerbit"] ?></td>
        <td><?= $buku["tahun_terbit"] ?></td>
        <td class="py-3">
          <a class="inline-block p-2 bg-red-700 text-white rounded-sm hover:bg-red-800" href="Buku.php?id=<?= $buku["id_buku"] ?>"><i class="fa-solid fa-trash"></i></a>
          <a class="inline-block p-2 bg-blue-700 text-white rounded-sm hover:bg-blue-800" href="FormBuku.php?id=<?= $buku["id_buku"] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
        </td>
      </tr>
      <?php endforeach ?>
    </table>
  </main>
</body>
</html>