<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- CSS kustom untuk memperbagus tampilan -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2 class="card-title">Login</h2>

            <?php if (!empty(session()->getFlashdata('pesan'))) : ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <?php echo session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>

            <?php if (!empty(session()->getFlashdata('require_login'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo session()->getFlashdata('require_login'); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/login') ?>" method="post">
                <!-- Email input -->
                <div class="mb-3">
                    <label class="form-label" for="email">Username/Email address</label>
                    <input id="email" class="form-control" name="username" value="<?= old('username') ?>" />
                </div>

                <!-- Password input -->
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" />
                </div>

                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
