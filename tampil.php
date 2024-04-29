<?php
include 'database.php';
$db = new database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Data Barang</h3>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga (Rp)</th>
            <th>Opsi</th>
        </tr>

        <?php
        $no = 1;
        foreach($db->tampil_data() as $x){
            ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $x['kode_barang']; ?></td>
                <td><?php echo $x['nama_barang']; ?></td>
                <td><?php echo $x['jumlah']; ?></td>
                <td><?php echo $x['harga']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit" class="edit-link">Edit</a>
                    <a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="delete-link">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <a href="input.php" class="button">Input Data</a>
</body>
</html>
