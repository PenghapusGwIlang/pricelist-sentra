<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="create.php" method="post">
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan nama barang</Label>
            <input type="text" name="nama_barang">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan kategori barang</Label>
            <input type="text" name="kategori">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan harga barang</Label>
            <input type="text" name="harga">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan stok barang</Label>
            <input type="number" name="stok">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan kode produksi barang</Label>
            <input type="text" name="kode_produksi">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan tanggal restock</Label>
            <input type="date" name="restock_date">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan tanggal expired</Label>
            <input type="date" name="expired_date">
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Apakah barang expired</Label>
            <input type="radio" name="is_expired" value="true"> ya
            <input type="radio" name="is_expired" value="false"> tidak
        </div>
        <div style="margin-bottom: 1rem;">
            <Label>Masukkan distributor barang</Label>
            <input type="text" name="distributor">
        </div>

        <button type="submit">Submit</button>
    </form>
</body>

</html>