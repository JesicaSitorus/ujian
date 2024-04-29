<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $db->input($_POST['kode_barang'],$_POST['nama_barang'],$_POST['jumlah'],$_POST['harga']);
    header("location:tampil.php");
}elseif($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:tampil.php");
}elseif($aksi == "update"){
    $db->update($_POST['id'],$_POST['kode_barang'],$_POST['nama_barang'],$_POST['jumlah'],$_POST['harga']);
    header("location:tampil.php");
}
?>