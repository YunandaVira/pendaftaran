<!-- application/views/kelas/edit.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Kelas</title>
</head>
<body>
    <h2>Edit Kelas</h2>

    <form action="<?php echo site_url('kelas/update') ?>" method="post">
        <input type="hidden" name="kode_kelas" value="<?php echo $kelas->kode_kelas ?>">

        <label for="nama_kelas">Nama Kelas:</label>
        <input type="text" id="nama_kelas" name="nama_kelas" value="<?php echo $kelas->nama_kelas ?>" required><br><br>

        <label for="kapasitas">Kapasitas:</label>
        <input type="number" id="kapasitas" name="kapasitas" value="<?php echo $kelas->kapasitas ?>" required><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
