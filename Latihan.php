<style.
body{
    background:  #eee;
    font-family:arial;
    }

#judul{
    font-family:Arial;
    font-weight:bold;
    font-size:14pt;
    border-bottom:  1px; gray;
}

#isi
    font-family:arrial;
    background: darkseagreen;
    margin-top:5px; 
} 

</style>

<div id="judul"><!DOCTYPE html>
<html>
<head>
    Data Mahasiswa</title>
</head>

<body>
    <header>
        </h3>Data Mahasiswa</h3>
    </header>
<div id="isi"><h4>Menu</h4>
    <nav>
        <?php if (isset($_GET['status'])) : ?>
            <p>
                <?php
                if($_GET['status'] == 'sukses') {
                    echo "pendaftaran berhasil";
                } else{
                    echo "pendaftaran gagal!";
                }   
                ?>
            </p>
        <?php endif; ?>
        <ul>
            <li><a href="daftar.php">Daftar Baru</a></li>
            <li><a href="list.php">List<?a></li>
        </ul>
    </nav> 

    </body>

</html>
   