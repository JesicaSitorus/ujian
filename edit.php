<?php 
include 'database.php';
$db = new database();
?>
<h3>Edit Data Barang</h3>
<link rel="stylesheet" href="style.css">

<form action="proses.php?aksi=update" method="post">
    <?php 
    foreach($db->edit($_GET['id']) as $d){
        ?>
        <table>
            <tr>
                <td>Kode Barang</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <input type="text" name="kode_barang" value="<?php echo $d['kode_barang'] ?>">

                </td>
            </tr>

            <tr>
            <td>
                Nama Barang
            </td>
            <td>
                <input type="text" name="nama_barang" value="<?php echo $d['nama_barang']?>">
            </td>
           </tr>

           <tr>
            <td>
                Jumlah
            </td>
            <td>
                <input type="text" name="jumlah" value="<?php echo $d['jumlah']?>">
            </td>
           </tr>

           <tr>
            <td>
                Harga
            </td>
            <td>
                <input type="text" name="harga" value="<?php echo $d['harga']?>">
            </td>
           </tr>

           <tr>
            <td>
                
            </td>
            <td>
                <input type="submit"  value="simpan">
            </td>
           </tr>
        </table>
        <?php 
    } ?>  
</form>