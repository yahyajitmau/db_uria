<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="daftar.css" />
    <title>Data Mahasiswa</h3>
</head>

<body>
    <head>
        <title>Data Mahasiswa</title>
    </header>
    <form action="pendaftaran.php" method="POST"
        <fieldset>
            <p>
                <label for="id">id: </label>
                <input type="text" name="id"
                placeholder="nomor" />
            </p>
            <p>
                <label for="nim">nim: </label>
                <input type="text" name="nim"
                placeholder="nomor induk" />
            </p>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" 
                placeholder="nama" /> 
            </p>
            <P>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" 
                placeholder="jurusan" />
            </p>
            <P>
                <label for="alamat">Alamat: </label>
                <input type="text" name="alamat" 
                placeholder="alamat" />
            </p>
            <P>
                <input type="submit" value="Daftar"
                name="daftar" />
            </P>
        </fieldset>
    </form>
</body>

</html>