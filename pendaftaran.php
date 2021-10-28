<?php

include("config.php");

// cek apakah tombol daftar sudah diklik apa blm
if(isset($_POST['daftar'])){

// ambil data dari formulir
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];


// buat query
$sql = "INSERT INTO mahasiswa (nim, nama, jurusan, alamat) VALUE 
('$nim', '$nama', '$jurusan', '$alamat')";
$query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        //kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman index.php dengan status=sukses
        header('location: index.php?status=gagal');
    }

} else {
    die("akses dilarang...");

}

?>
