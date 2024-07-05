<h2>Daftar Guru</h2>

<table border="1">
    <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Hapus</th>
        <th>Edit</th>

    </tr>
    <?php foreach ($guru as $row): ?>
    <tr>
        <td><?php echo $row->nip ?></td>
        <td><?php echo $row->nama_guru ?></td>
        <td><?php echo $row->alamat ?></td>
        <td><?php echo $row->email ?></td>
        <td>
        <a href="<?php echo site_url('guru/delete/'.$row->nip); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data guru <?php echo $row->nama_guru?> dari daftar?');">
        <input type="submit" value="Hapus">
        </td>
        <td>
            <!-- Form untuk edit -->
            <form method="post" action="<?php echo site_url('guru/edit/'.$row->nip); ?>">
                <input type="submit" value="Edit">
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
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

<a href="<?php echo site_url('guru/tambah'); ?>" class="btn-tambah">Tambah Data Guru</a><br><br>
