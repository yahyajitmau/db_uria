<?php
include("config.php");

// cek apakah tombol simpan sudah diklik apa blm
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jurusan = $_POST['alamat'];

    // buat query update
    $sql ="UPADATE mahasiswa SET nama='$nama', 
    jurusan='$jurusan' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        //kalau berhasil alihkan ke halaman list-.php
        header('location: list.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>