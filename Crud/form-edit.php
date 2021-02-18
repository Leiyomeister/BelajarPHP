<?php
// form untuk edit datta siswa
include ("config.php");

if (!isset($_GET{'id'}))
{
    header(' Location: list-siswa.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1)
{
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa</title>
</head>
<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>"/>
        <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>"/>
        </p>
        <p>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" cols="21" rows="3"><?php echo $siswa['alamat'] ?></textarea>
        </p>
        <p>
            <label for="jenis kelamin">Jenis Kelamin:</label>
            <?php $jenis_kelamin = $siswa['jenis_kelamin']; ?>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"<?php echo ($jenis_kelamin == 'laki-laki') ? "checked" : "" ?> >Laki-Laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"<?php echo ($jenis_kelamin == 'perempuan') ? "checked" : "" ?> >Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama:</label>
            <?php $agama = $siswa['agama']; ?>
            <select name="agama" id="agama">
                <option <?php echo ($agama == 'Islam') ? "selected" : "" ?> >Islam</option>
                <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?> >Kristen</option>
                <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?> >Hindu</option>
                <option <?php echo ($agama == 'Budha') ? "selected" : "" ?> >Budha</option>
                <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?> >Atheis</option>
            </select>           
        </p>
        <p>
            <label for="asal_sekolah">Asal Sekolah: </label>
            <input type="text" name="asal_sekolah" placeholder="nama sekolah" value="<?php echo $siswa['asal_sekolah'] ?>"/>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan"/>
        </p>
        </fieldset>
    </form>
    
</body>
</html>
