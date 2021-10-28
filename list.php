<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="list.css" />
    <title>Data Mahasiswa</title>
</head>

<body>
    <header>
        <h3>Mahasiswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr style="text-align:center;font-weight:bold;background-color:grey">
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM mahasiswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";
            
            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nim']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['jurusan']."</td>";
            echo "<td>".$siswa['alamat']."</td>";

            echo "<td>";
            echo "<a href='edit.php?id=".$siswa['id']."'>edit</a> ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>hapus</a> ";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
<html>


