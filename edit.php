<?php
include("config.php");

//kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('location: list.php');
}

//ambil id dari query string
$id = $_GET['id'];

//buat query untuk mabil data dari database
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

//jika ada yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="list.css" />
    <title>Data Mahasiswa</title>
</head>

<body>
    <header>
        <h3>Data Mahasiswa</h3>
    <header>
    <form action="edits.php"method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php 
            echo $siswa['id'] ?>" />
        <p>
            <label for="nim">Nim: </label>
            <input type="text" name="nim"
            placeholder="Isikan nim" <?php 
            echo $siswa['nim'] ?> />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama"
            placeholder="Isikan Nama" <?php 
            echo $siswa[ 'Nama' ] ?> />
        </p>
        <p>
        <label for="jurusan">Jurusan: </label>
            <input type="text" name="jurusan"
            placeholder="Isikan Jurusan" <?php 
            echo $siswa[ 'Jurusan' ] ?> />
        </p>
        <p>
        <label for="alamat">Alamat: </label>
            <input type="text" name="alamat"
            placeholder="Isikan Alamat" <?php 
            echo $siswa[ 'Alamat' ] ?> />
        </p>
        
            <input type="submit" value="simpan" name="simpan"
            />
        </p>
        </fieldset>
    </form>
    </body>
</html>
    



