<!DOCTYPE html>
<html>
<head>
    <title>Daftar Jurusan</title>
</head>
<body>
    <h2>Daftar Jurusan</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Jurusan</th>
                <th>Nama Jurusan</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($jurusan as $jrs): ?>
            <tr>
                <td><?php echo $jrs->kode_jurusan; ?></td>
                <td><?php echo $jrs->nama_jurusan; ?></td>
                <td>
                <a href="<?php echo site_url('jurusan/edit/'.$jrs->kode_jurusan); ?>">
                <input type="submit" value="Edit">
            </td>
            <td>
                <a href="<?php echo site_url('jurusan/delete/'.$jrs->kode_jurusan); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus jurusan <?php echo $jrs->nama_jurusan; ?> dari daftar?');">
                <input type="submit" value="Hapus">
            </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="container">
        <br>
        <br>
        <style>
    .btn-tambah {
        display: inline-block;
        padding: 6px 12px;
        font-size: 14px;
        background-color: #dcdcdc; /* Warna abu-abu muda */
        color: #333; /* Warna teks */
        text-decoration: none;
        border: 1px solid #ccc; /* Garis tepi solid */
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
        transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s;
    }

    .btn-tambah:hover {
        background-color: #0056b3; /* Warna abu-abu muda saat hover */
        color: #fff;
        transform: translateY(-1px) scale(1.05); /* Efek sedikit naik dan sedikit memperbesar */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan lebih lembut saat hover */
    }
</style>

<a href="<?php echo site_url('jurusan/create'); ?>" class="btn-tambah">Tambah Jurusan</a><br><br>

    </div>
</body>
</html>
