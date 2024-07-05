<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kelas</title>
</head>
<body>
    <h2>Daftar Kelas</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Kode Kelas</th>
                <th>Nama Kelas</th>
                <th>Kapasitas</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($kelas as $kl): ?>
            <tr>
                <td><?php echo $kl->kode_kelas; ?></td>
                <td><?php echo $kl->nama_kelas; ?></td>
                <td><?php echo $kl->kapasitas; ?></td>
                <td>
                <a href="<?php echo site_url('kelas/edit/'.$kl->kode_kelas); ?>">
                <input type="submit" value="Edit">
            </td>
            <td>
                <a href="<?php echo site_url('kelas/delete/'.$kl->kode_kelas); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus kelas <?php echo $kl->nama_kelas; ?> dari daftar?');">
                <input type="submit" value="Hapus">
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<br>
<br>
    <!-- Tombol untuk menambah kelas -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kelas</title>
    <style>
        .btn-edit {
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            color: #333;
            background-color: #dcdcdc; /* Warna biru */
            border: 1px solid #ccc; /* Garis tepi biru */
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s;
        }

        .btn-edit:hover {
            background-color: #0056b3; /* Warna abu-abu muda saat hover */
            color: #fff;
            transform: translateY(-1px) scale(1.05); /* Efek sedikit naik dan sedikit memperbesar */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan lebih lembut saat hover */
        }
    </style>
</head>
<body>
    <a href="<?php echo site_url('kelas/create'); ?>" class="btn-edit">Tambah Kelas</a><br><br>
</body>
</html>

</body>
</html>
