<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>

<h1>Edit Data Siswa</h1>

<?php echo validation_errors(); ?>

<?php echo form_open('siswa/update/'.$siswa->nis); ?>

    <label for="nis">NIS</label>
    <input type="text" name="nis" value="<?php echo $siswa->nis; ?>" readonly><br><br>

    <label for="nama">Nama</label>
    <input type="text" name="nama" value="<?php echo set_value('nama', $siswa->nama); ?>"><br><br>

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" value="<?php echo set_value('alamat', $siswa->alamat); ?>"><br><br>

    <label for="telpon">Telepon</label>
    <input type="text" name="telpon" value="<?php echo set_value('telpon', $siswa->telpon); ?>"><br><br>

    <input type="submit" name="submit" value="Simpan Perubahan">

<?php echo form_close(); ?>

</body>
</html>
