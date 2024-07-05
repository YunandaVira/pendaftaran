<!-- application/views/guru/edit.php -->

<h2>Edit Guru</h2>

<form action="<?php echo site_url('guru/update') ?>" method="post">
    <input type="hidden" name="nip" value="<?php echo $guru->nip ?>">

    <label for="nama_guru">Nama Guru:</label>
    <input type="text" id="nama_guru" name="nama_guru" value="<?php echo $guru->nama_guru ?>" required><br><br>

    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" value="<?php echo $guru->alamat ?>" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $guru->email ?>" required><br><br>

    <button type="submit">Simpan Perubahan</button>
</form>
