<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Beranda</title>
  <link href="./output.css" rel="stylesheet">
</head>
<body class="font-poppins">
  <nav class="flex justify-between items-center bg-slate-300 h-14 px-4">
    <h1 class="text-3xl font-bold text-black">Halaman Beranda</h1>
  </nav>
  <main class="flex justify-center items-center py-5">
    <button onclick="window.location.href='Member.php'" class="py-2 px-6 text-white rounded-sm bg-sky-600 hover:bg-sky-700">Member</button>
    <button onclick="window.location.href='Buku.php'" class="mx-4 py-2 text-white px-6 rounded-sm bg-emerald-600 hover:bg-emerald-700">Buku</button>
    <button onclick="window.location.href='Peminjaman.php'" class="py-2 px-6 text-white rounded-sm bg-cyan-600 hover:bg-cyan-700">Peminjaman</button>
  </main>
</body>
</html>