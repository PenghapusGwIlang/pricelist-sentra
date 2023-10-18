<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Price list barang</h2>
    <a href="createForm.php">Buat barang baru</a>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kode Produksi</th>
            <th>Tanggal Restock</th>
            <th>Tanggal Expired</th>
            <th>Apakah Expired</th>
            <th>Distributor</th>
        </tr>

        <?php
        include 'connect.php';

        $data = $conn->query('SELECT * FROM barang');
        $no = 1;

        while ($row = $data->fetch_array()) {
        ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama_barang']; ?></td>
                <td><?php echo $row['kategori']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td><?php echo $row['stok']; ?></td>
                <td><?php echo $row['kode_produksi']; ?></td>
                <td><?php echo $row['restock_date']; ?></td>
                <td><?php echo $row['expired_date']; ?></td>
                <td><?php echo $row['is_expired']; ?></td>
                <td><?php echo $row['distributor']; ?></td>
                <td>
                    <a href="editForm.php?id=<?php echo $row['id'] ?>">Edit</a>
                    <form action="delete.php" method="post" style="display: inline-block;">
                        <input type="text" name="id" value="<?php echo $row['id'] ?>" hidden>
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>

        <?php }
        $conn->close()
        ?>
    </table>
</body>

</html> -->