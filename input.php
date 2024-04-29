<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Tambah Data Barang</h3>

    <form name="inputForm" action="proses.php?aksi=tambah" method="post" onsubmit="return validateForm()">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kode_barang" placeholder="Masukkan Kode Barang" ></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" ></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="number" name="jumlah" placeholder="Masukkan Jumlah" ></td>
            </tr>
            <tr>
                <td>Harga (rp)</td>
                <td><input type="text" name="harga" placeholder="Masukkan Harga (Rp)" ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>

    <script src="script.js"></script>
</body>
</html>
