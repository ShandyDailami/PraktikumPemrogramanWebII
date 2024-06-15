<?php
  require 'Koneksi.php';
  require 'Model.php';
  $member = [
    "id_member" => "",
    "nama_member" => "",
    "nomor_member" => "",
    "alamat" => "",
    "tgl_mendaftar" => "",
    "tgl_terakhir_bayar" => ""
];
  $id = "";
  if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    if ($id > 0) {
        $result = tampil("SELECT * FROM member WHERE id_member = $id");
        if (!empty($result)) {
            $member = $result[0];
        }
    }
  }
  if (isset($_POST["submit"])) {
    if (empty($_POST["id_member"])) {
        tambahMember($_POST);
        header("Location: Member.php");
        exit();
    } else {
        ubahMember($_POST);
        header("Location: Member.php");
        exit();
    }
}
?>
<!doctype html>
<html>
<head>
  <title>Halaman Form Member</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="font-poppins">
  <nav class="flex justify-between items-center bg-slate-300 mb-10 h-14 px-4">
    <h1 class="text-3xl font-bold text-black">Halaman Form Member</h1>
    <a href="Member.php" class="text-black">back</a>
  </nav>
  <main class="flex justify-center h-screen items-center">
    <form action="" method="post" value="" class="border border-gray-300 rounded-sm w-1/2 p-5 flex flex-col">
    <input type="hidden" name="id" value="<?= htmlspecialchars($member["id_member"]) ?>">
      <!-- <div>
        <label for="id">ID Member</label><br>
        <input <?= !empty($member["id_member"]) ? 'disabled' : '' ?> value="<?= $member["id_member"] ?>" class="border border-gray-300 rounded-sm w-full h-10 mb-5 p-3" type="text" name="id" id="id">
      </div> -->
      <div class="mb-5">
        <label for="nama">Nama</label><br>
        <input value="<?= $member["nama_member"] ?>" class="border border-gray-300 rounded-sm w-full h-10 p-3" type="text" name="nama" id="nama">
      </div>
      <div class="mb-5">
        <label for="nomor">Nomor Member</label><br>
        <input value="<?= $member["nomor_member"] ?>" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="border border-gray-300 rounded-sm w-full h-10 p-3" type="text" name="nomor" id="nomor">
      </div>
      <div class="mb-5">
        <label for="alamat">Alamat</label><br>
        <input value="<?= $member["alamat"] ?>" class="border border-gray-300 rounded-sm w-full h-10 p-3" type="text" name="alamat" id="alamat">
      </div>
      <div class="mb-5">
        <label for="daftar">Tanggal Daftar</label><br>
        <input value="<?= $member["tgl_mendaftar"] ?>" class="border border-gray-300 rounded-sm h-10 p-3 w-full" type="datetime-local" name="daftar" id="daftar">
      </div>
      <div class="mb-5">
        <label for="bayar">Tanggal Bayar</label><br>
        <input value="<?= $member["tgl_terakhir_bayar"] ?>" class="border border-gray-300 rounded-sm h-10 p-3 w-full" type="date" name="bayar" id="bayar">
      </div>
      <button class="bg-blue-500 text-white py-2 rounded-sm" type="submit" name="submit">Submit</button>
    </form>
  </main>
</body>
</html>