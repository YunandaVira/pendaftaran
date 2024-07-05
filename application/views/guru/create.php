<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Guru</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif; /* Mengubah jenis font utama */
            background-color: #f0f0f0; /* Warna latar belakang */
            color: #333; /* Warna font */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Set tinggi minimum untuk konten vertical center */
        }
        .container {
            background-color: #ffffff; /* Warna latar belakang konten */
            box-shadow: 0 0 10px rgba(0,0,0,0.1); /* Bayangan lembut */
            padding: 30px;
            border-radius: 8px; /* Sudut bulat */
            width: 100%;
            max-width: 500px; /* Lebar maksimal kontainer */
        }
        .header {
            background-color: #343a40; /* Warna latar belakang header */
            color: #ffffff; /* Warna font header */
            padding: 10px 0; /* Padding header */
            text-align: center; /* Pusatkan teks header */
            border-radius: 8px 8px 0 0; /* Sudut bulat untuk header */
            margin-bottom: 20px; /* Margin bawah untuk header */
        }
        .header h1 {
            margin-bottom: 0; /* Hapus margin bawah untuk judul header */
        }
        .btn-primary {
            background-color: #007bff; /* Warna tombol utama */
            border-color: #007bff; /* Warna border tombol utama */
            font-size: 16px; /* Ukuran font tombol */
            padding: 10px 20px; /* Padding tombol */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Warna tombol utama saat hover */
            border-color: #0056b3; /* Warna border tombol utama saat hover */
        }
        label {
            font-weight: bold; /* Tebal font label */
            font-size: 16px; /* Ukuran font label */
            color: #555; /* Warna font label */
        }
        input[type=text], input[type=email], input[type=tel], textarea {
            font-size: 16px; /* Ukuran font input */
            padding: 10px; /* Padding input */
        }
    </style>
</head>
<body>
    <div class="container mt-3 mb-3">
        <div class="header">
            <h1>Tambah Guru</h1>
        </div>
        <?php echo validation_errors(); ?>
        <?php echo form_open('guru/store'); ?>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip">
            </div>
            <div class="form-group">
                <label for="nama_guru">Nama Guru</label>
                <input type="text" class="form-control" id="nama_guru" name="nama_guru">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        <?php echo form_close(); ?>
    </div>
</body>
</html>
