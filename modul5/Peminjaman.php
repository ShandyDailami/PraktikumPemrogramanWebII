<?php
  if(isset($_GET["id"])){
    var_dump($_GET["id"]);
  }
?>
<!doctype html>
<html>
<head>
  <title>Halaman Peminjaman</title>
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
    <h1 class="text-3xl font-bold text-black">Halaman Peminjaman</h1>
    <a href="index.php" class="text-black">back</a>
  </nav>
  <section class="p-4">
    <button class="bg-green-700 text-white py-2 px-6 rounded-sm hover:bg-green-800" onclick="window.location.href='FormPeminjaman.php'">Tambah</button>
  </section>
  <main class="px-4">
    <table class="w-full border-collapse border-y">
      <tr class="bg-yellow-400">
        <th class="py-3">ID Peminjaman</th>
        <th class="py-3">Tanggal Pinjam</th>
        <th class="py-3">Tanggal Kembali</th>
        <th class="py-3">ID Member</th>
        <th class="py-3">ID Buku</th>
        <th class="py-3"></th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class="py-3">
          <a class="inline-block p-2 bg-red-700 text-white rounded-sm hover:bg-red-800" href="Member.php?id="><i class="fa-solid fa-trash"></i></a>
          <a class="inline-block p-2 bg-blue-700 text-white rounded-sm hover:bg-blue-800" href="FormMember?id="><i class="fa-solid fa-pen-to-square"></i></a>
        </td>
      </tr>
    </table>
  </main>
</body>
</html>