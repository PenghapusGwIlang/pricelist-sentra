<?php

include 'connect.php';

$nama_barang = $_POST['nama_barang'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$kode_produksi = $_POST['kode_produksi'];
$restock_date = $_POST['restock_date'];
$expired_date = $_POST['expired_date'];
$is_expired = $_POST['is_expired'];
$distributor = $_POST['distributor'];

if ($conn->query("INSERT INTO barang (nama_barang, kategori, harga, stok, kode_produksi, restock_date, expired_date, is_expired, distributor) VALUES ('$nama_barang', '$kategori', '$harga', '$stok', '$kode_produksi', '$restock_date', '$expired_date', '$is_expired', '$distributor')")) {
    header('Location: index.php');
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
