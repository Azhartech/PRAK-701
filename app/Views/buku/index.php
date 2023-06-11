<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Tambahkan link CSS Bootstrap 5 dengan tema modern -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tambahkan CSS kustom -->
    <style>
        /* Gaya kustom */
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 20px;
        }

        h1 {
            color: #343a40;
        }

        p {
            color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-5">Selamat Datang di Perpustakaan</h1>
                <p>Ini adalah halaman home</p>
            </div>
        </div>

        <!-- Daftar Buku -->
        <div class="row">
            <div class="col-12">
                <h2>Daftar Buku</h2>
                <a class="btn btn-success" href="<?= base_url('/buku/create') ?>">Tambah Data</a>
            </div>

            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($buku as $key => $value): ?>
                            <tr>
                                <td><?= $value['judul'] ?></td>
                                <td><?= $value['penulis'] ?></td>
                                <td><?= $value['penerbit'] ?></td>
                                <td><?= $value['tahun_terbit'] ?></td>
                                <td>
                                    <a href="<?= base_url('/buku/' . $value['id'] . '/edit') ?>"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="<?= base_url('/buku/' . $value['id'] . '/delete') ?>" method="POST"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this item?')"
                                            class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Logout Button -->
        <div class="row">
            <div class="col">
                <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>

    </div>
    <!-- Tambahkan script JS Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
