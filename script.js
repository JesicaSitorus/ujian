function validateForm() {
    var kode_barang = document.forms["inputForm"]["kode_barang"].value;
    var nama_barang = document.forms["inputForm"]["nama_barang"].value;
    var jumlah = document.forms["inputForm"]["jumlah"].value;
    var harga = document.forms["inputForm"]["harga"].value;

    if (kode_barang == "" || nama_barang == "" || jumlah == "" || harga == "") {
        alert("Semua field harus diisi");
        return false;
    }
}
