<?php
  if(isset($_GET["id"])){
    var_dump($_GET["id"]);
  }
?>
<!doctype html>
<html>
<head>
  <title>Halaman Tambah Peminjaman</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="font-poppins">
  <nav class="flex justify-between items-center bg-slate-300 h-14 px-4">
    <h1 class="text-3xl font-bold text-black">Halaman Tambah Peminjaman</h1>
    <a href="Peminjaman.php" class="text-black">back</a>
  </nav>
  <main class="flex justify-center h-screen items-center">
    <form action="" method="post" class="border border-gray-300 rounded-sm w-1/2 p-5 flex flex-col">
      <div>
        <label for="id">ID Peminjaman</label><br>
        <input class="border border-gray-300 rounded-sm w-full h-10 mb-5 p-3" type="text" name="id" id="id">
      </div>
      <div class="mb-5">
        <label for="pinjam">Tanggal Peminjaman</label><br>
        <input class="border border-gray-300 rounded-sm w-full h-10 p-3" type="text" name="pinjam" id="pinjam">
      </div>
      <div class="mb-5">
        <label for="kembali">Tanggal Pengembalian</label><br>
        <input class="border border-gray-300 rounded-sm w-full h-10 p-3" type="text" name="kembali" id="kembali">
      </div>
      <div class="mb-5">
        <label for="member">ID Member</label><br>
        <select class="border border-gray-300 rounded-sm w-full h-10 p-3" type="text" name="member" id="member">

        </select>
      </div>
      <div class="mb-5">
        <label for="buku">ID Buku</label><br>
        <select class="border  border-gray-300 rounded-sm w-full h-10 p-3" type="text" name="buku" id="buku">

        </select>
      </div>
      <button class="bg-blue-500 text-white py-2 rounded-sm" type="submit" name="submit">Submit</button>
    </form>
  </main>
</body>
</html>