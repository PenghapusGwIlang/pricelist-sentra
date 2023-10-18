<?php

include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $q = $conn->query("SELECT * FROM barang WHERE id = $id");
    $data = $q->fetch_assoc();
} else {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update.php" method="post">
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan nama barang</Label>
            <input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan kategori barang</Label>
            <input type="text" name="kategori" value="<?php echo $data['kategori'] ?>">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan harga barang</Label>
            <input type="text" name="harga" value="<?php echo $data['harga'] ?>">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan stok barang</Label>
            <input type="number" name="stok" value="<?php echo $data['stok'] ?>">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan kode produksi barang</Label>
            <input type="text" name="kode_produksi" value="<?php echo $data['kode_produksi'] ?>">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan tanggal restock</Label>
            <input type="date" name="restock_date" value="<?php echo $data['restock_date'] ?>">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan tanggal expired</Label>
            <input type="date" name="expired_date" value="<?php echo $data['expired_date'] ?>">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Apakah barang expired</Label>
            <input type="radio" name="is_expired" value="1" <?php echo $data['is_expired'] == '1' ? 'checked' : '' ?>> ya
            <input type="radio" name="is_expired" value="0" <?php echo $data['is_expired'] == '0' ? 'checked' : '' ?>> tidak
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan distributor barang</Label>
            <input type="text" name="distributor" value="<?php echo $data['distributor'] ?>">
        </div>

        <input type="text" name="id" value="<?php echo $id ?>" hidden>

        <button type="submit">Submit</button>
    </form>
</body>

</html>