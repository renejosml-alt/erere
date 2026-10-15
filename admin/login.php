<!doctype html>
<html lang="en">
<head>
    <title>Login - Restaurante</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color: #f4f4f4;
        }
        .login-container{
            height: 100vh;
        }
    </style>
</head>

<body>

<div class="container login-container d-flex justify-content-center align-items-center">

    <div class="col-md-4">

        <div class="card shadow">

            <div class="card-header text-center">
                <h4>Login</h4>
            </div>

            <div class="card-body">

                <form action="index.php" method="post">

                    <div class="mb-3">
                        <label class="form-label">Usuario:</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Entrar
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>