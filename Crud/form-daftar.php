<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru</title>
</head>
<body>
    <header>
        <h3>Formuliar Pendaftaran Siswa Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="nama lengkap">
        </p>
        <p>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" cols="21" rows="3"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama:</label>
            <select name="agama" id="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Atheis">Atheis</option>
            
            </select>
        </p>
        <p>
            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" name="asal_sekolah" placeholder="nama sekolah"/>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar"/>
        </p>
        </fieldset>
    </form>
    
    
</body>
</html>
