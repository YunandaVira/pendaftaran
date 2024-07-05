<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kelas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 30px;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
        }
        .header {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
            border-radius: 8px 8px 0 0;
            margin-bottom: 20px;
        }
        .header h1 {
            margin-bottom: 0;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 16px;
            padding: 10px 20px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        label {
            font-weight: bold;
            font-size: 16px;
            color: #555;
        }
        input[type=text], textarea {
            font-size: 16px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-3 mb-3">
        <div class="header">
            <h1>Tambah Kelas</h1>
        </div>
        <?php echo validation_errors(); ?>
        <?php echo form_open('kelas/store'); ?>
            <div class="form-group">
                <label for="kode_kelas">Kode Kelas</label>
                <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" aria-label="Kode Kelas" aria-describedby="kodeKelasHelp">
            </div>
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" aria-label="Nama Kelas" aria-describedby="namaKelasHelp">
            </div>
            <div class="form-group">
                <label for="kapasitas">Kapasitas</label>
                <input type="text" class="form-control" id="kapasitas" name="kapasitas" aria-label="Kapasitas" aria-describedby="kapasitasHelp">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        <?php echo form_close(); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
