
<h2>Daftar Siswa</h2>
<table border="1">
    <thead>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($siswa as $s): ?>
        <tr>
            <td><?php echo $s->nis; ?></td>
            <td><?php echo $s->nama; ?></td>
            <td><?php echo $s->alamat; ?></td>
            <td><?php echo $s->telpon; ?></td>
            <td>
                <a href="<?php echo site_url('siswa/edit/'.$s->nis); ?>">
                <input type="submit" value="Edit">
            </td>
            <td>
            <a href="<?php echo site_url('siswa/delete/'.$s->nis); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data <?php echo $s->nama; ?> dari daftar?');">
            <input type="submit" value="Hapus">
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br>
<br>
<style>
    .btn-tambah {
        display: inline-block;
        padding: 6px 12px;
        font-size: 14px;
        background-color: #dcdcdc; /* Warna biru */
        color: #333; /* Warna teks putih */
        text-decoration: none;
        border: 1px solid #ccc; /* Garis tepi solid */
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
        transition: background-color 0.3s, transform 0.2s, box-shadow 0.2s, color 0.2s; /* Efek transisi */
    }

    .btn-tambah:hover {
        background-color: #0056b3; /* Warna biru tua saat hover */
        border-color: #0056b3; /* Warna border saat hover */
        color: #fff; /* Warna teks putih saat hover */
        transform: translateY(-1px) scale(1.05); /* Efek sedikit naik dan sedikit memperbesar */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Bayangan lebih lembut saat hover */
    }
</style>

<a href="<?php echo site_url('siswa/create'); ?>" class="btn-tambah">Tambah Data Siswa</a><br><br>


</body>
</html>

