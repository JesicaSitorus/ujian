<?php

class Database {
 
    private $host = "localhost";
    private $uname = "root";
    private $pass = "";
    private $db = "toko_jesi";
    private $conn;
 
    function __construct(){
        $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
 
    function tampil_data(){
        $sql = "SELECT * FROM barang";
        $result = $this->conn->query($sql);
        $hasil = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $hasil[] = $row;
            }
        }
        return $hasil;
    }

    function input($kode_barang, $nama_barang, $jumlah, $harga){
        $kode_barang = $this->conn->real_escape_string($kode_barang);
        $nama_barang = $this->conn->real_escape_string($nama_barang);
        $jumlah = intval($jumlah);
        // Konversi harga ke tipe data double
        $harga = doubleval(str_replace(',', '.', $harga));
    
        $stmt = $this->conn->prepare("INSERT INTO barang (kode_barang, nama_barang, jumlah, harga) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssdi", $kode_barang, $nama_barang, $jumlah, $harga);
        if ($stmt->execute()) {
            return true;
        } else {
            return "Error: " . $stmt->error;
        }
    }

    function __destruct(){
        $this->conn->close();
    }

    function hapus($id){
        $sql = "DELETE FROM barang WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            return true;
        } else {
            return "Error: " . $stmt->error;
        }
    }

    function edit($id){
        $stmt = $this->conn->prepare("SELECT * FROM barang WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $hasil = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $hasil[] = $row;
            }
        }
        return $hasil;
    }

    function update($id, $kode_barang, $nama_barang, $jumlah, $harga){
        $kode_barang = $this->conn->real_escape_string($kode_barang);
        $nama_barang = $this->conn->real_escape_string($nama_barang);
        $jumlah = intval($jumlah);
        // Konversi harga ke tipe data double
        $harga = doubleval(str_replace(',', '.', $harga));
    
        $stmt = $this->conn->prepare("UPDATE barang SET kode_barang=?, nama_barang=?, jumlah=?, harga=? WHERE id=?");
        $stmt->bind_param("ssdii", $kode_barang, $nama_barang, $jumlah, $harga, $id);
        if ($stmt->execute()) {
            return true;
        } else {
            return "Error: " . $stmt->error;
        }
    }
 
} 
 
?>
