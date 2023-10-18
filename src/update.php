<?php

include 'connect.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $kode_produksi = $_POST['kode_produksi'];
    $restock_date = $_POST['restock_date'];
    $expired_date = $_POST['expired_date'];
    $is_expired = $_POST['is_expired'];
    $distributor = $_POST['distributor'];

    if ($conn->query("UPDATE barang SET nama_barang = '$nama_barang', kategori = '$kategori', harga = '$harga', stok = '$stok', kode_produksi = '$kode_produksi', restock_date = '$restock_date', expired_date = '$expired_date', is_expired = '$is_expired', distributor = '$distributor' WHERE id = $id")) {
        header('Location: index.php');
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    header('Location: index.php');
}
