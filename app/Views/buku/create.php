<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- Tambahkan library jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- CSS kustom untuk memperbagus tampilan -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #343a40;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .ui-datepicker-header {
            background-color: #28a745;
            border-color: #28a745;
            color: #fff;
        }

        .ui-datepicker-calendar a {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Tambah Data Buku</h2>
            </div>

            <div class="col-6 offset-3">
                <form action="<?= base_url('/buku/create') ?>" method="post">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <!-- Ubah input tahun terbit menjadi input tanggal menggunakan datepicker -->
                        <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit">
                    </div>
                    <!-- Tombol Tambah dengan warna hijau -->
                    <button type="submit" class="btn btn-success d-block mx-auto">Tambah</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Tambahkan library jQuery UI Datepicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            // Inisialisasi datepicker pada input tahun terbit
            $("#tahun_terbit").datepicker({
                dateFormat: "yy-mm-dd", // Format tanggal (tahun-bulan-tanggal)
                changeYear: true, // Menampilkan pilihan tahun
                yearRange: "1900:2099" // Rentang tahun yang dapat dipilih
            });
        });
    </script>
</body>

</html>
