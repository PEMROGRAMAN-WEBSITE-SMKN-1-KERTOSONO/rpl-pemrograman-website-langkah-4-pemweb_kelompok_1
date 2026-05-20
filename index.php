<input type="text" name="nama">
<textarea name="catatan"></textarea>

<?php

$nama = $_POST['nama'];
$catatan = $_POST['catatan'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Catatan</title>
</head>
<body>

<h2>Aplikasi Catatan Harian</h2>

<form method="POST">

    <label>Nama</label><br>
    <input type="text" name="nama"><br><br>

    <label>Catatan</label><br>
    <textarea name="catatan"></textarea><br><br>

    <button type="submit" name="simpan">
        Simpan
    </button>

</form>

</body>
</html>