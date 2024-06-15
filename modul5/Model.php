<?php
  require 'Koneksi.php';

  function tampil($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    return $rows;
  }
  function tambahMember($data) {
    global $conn;
    $id = htmlspecialchars($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $nomor = htmlspecialchars($data["nomor"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $daftar = htmlspecialchars($data["daftar"]);
    $bayar = htmlspecialchars($data["bayar"]);

    $query = "INSERT INTO member
    VALUES ($id, '$nama', '$nomor', '$alamat', '$daftar', '$bayar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }
  function hapusMember($id) {
    global $conn; 
    mysqli_query($conn, "DELETE FROM member WHERE id_member = $id");
    return mysqli_affected_rows($conn);
  }
  function ubahMember($data) {
    global $conn;
    $id = intval($data["id"]);
    $nama = htmlspecialchars($data["nama"]);
    $nomor = htmlspecialchars($data["nomor"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $daftar = htmlspecialchars($data["daftar"]);
    $bayar = htmlspecialchars($data["bayar"]);

    $query = "UPDATE member SET
    nama_member = '$nama', 
    nomor_member = '$nomor', 
    alamat = '$alamat', 
    tgl_mendaftar = '$daftar', 
    tgl_terakhir_bayar = '$bayar'
    WHERE id_member = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }
  function tambahBuku($data) {
    global $conn;
    $id = intval($data["id"]);
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun = htmlspecialchars($data["tahun"]);

    $query = "INSERT INTO buku
    VALUES ($id, '$judul', '$penulis', '$penerbit', $tahun)";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }
  function hapusBuku($id) {
    global $conn; 
    mysqli_query($conn, "DELETE FROM buku WHERE id_buku = $id");
    return mysqli_affected_rows($conn);
  }
  function ubahBuku($data) {
    global $conn;
    $id = intval($data["id"]);
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $tahun = htmlspecialchars($data["tahun"]);

    $query = "UPDATE buku SET
    judul_buku = '$judul', 
    penulis = '$penulis', 
    penerbit = '$penerbit', 
    tahun_terbit = '$tahun'
    WHERE id_buku = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }