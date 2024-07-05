<!-- application/views/jurusan/edit.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Jurusan</title>
</head>
<body>
    <h2>Edit Jurusan</h2>

    <form action="<?php echo site_url('jurusan/update') ?>" method="post">
        <input type="hidden" name="kode_jurusan" value="<?php echo $jurusan->kode_jurusan ?>">

        <label for="kode_jurusan">Kode Jurusan:</label>
        <input type="text" id="kode_jurusan" name="kode_jurusan" value="<?php echo $jurusan->kode_jurusan ?>" required><br><br>

        <label for="nama_jurusan">Nama Jurusan:</label>
        <input type="text" id="nama_jurusan" name="nama_jurusan" value="<?php echo $jurusan->nama_jurusan ?>" required><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
