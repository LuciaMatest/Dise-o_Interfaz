<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Login - Bootstrap</title>
</head>

<body>
    <header class="p-3" style="background-color: #f0f0f0;">
        <div class="mx-2">
            <div class="d-flex bd-highlight mb-1 align-items-center justify-content-space-between">
                <div class="me-auto mb-1 bd-highlight" class="logo">
                    <img src="../Imagen/logo.png" alt="logo" class="icono_logo" style="width: 200px;">
                </div>

                <div class="p-2">
                    <?php
                    // session_start();
                    // if (estaValidado()) {
                    //     echo '<a href="#" type="button" class="btn boton px-1"><i class="fa-solid fa-cart-arrow-down pe-2"></i>Carrito</a>';
                    //     echo '<a href="#" type="button" class="btn boton px-1"><i class="fa-solid fa-pen-to-square pe-2"></i>Perfil</a>';
                    //     echo '<a href="#" type="button" class="btn boton px-1"><i class="fa-solid fa-right-from-bracket pe-2"></i>Cerrar Sesión</a>';
                    // } else {
                    ?>
                    <a href="#" type="button" class="boton px-1"><i class="fa-solid fa-user pe-2"></i>Iniciar Sesión</a>
                    <?php
                    // }
                    ?>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand  p-0" style="background-color: #d4d4d4;">
        <div class="container-fluid px-0">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-1">
                    <li class="opli nav-item p-2 fw-bold"><a class="op nav-link" href="#">Inicio</a></li>
                    <li class="opli nav-item p-2 fw-bold"><a class="op nav-link" href="#">Tienda</a></li>
                    <li class="opli nav-item p-2 fw-bold"><a class="op nav-link" href="#">Contacto</a></li>
                    <li class="opli nav-item p-2 fw-bold"><a class="op nav-link" href="#">Ofertas</a></li>
                    <?php
                    // if (esAdmin() || esModerador()) {
                    //     echo '<li class="nav-item p-2 fw-bold"><a class="nav-link" href="#">Almacén</a></li>';
                    //     echo '<li class="nav-item p-2 fw-bold"><a class="nav-link" href="#">Albarán</a></li>';
                    //     echo '<li class="nav-item p-2 fw-bold"><a class="nav-link" href="#">Ventas</a></li>';
                    // }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="card-title text-center">
                            <h2 class="p-3">Acceder</h2>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-4">
                                    <label for="username" class="form-label">Username/Email</label>
                                    <input type="text" class="form-control" id="username" />
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" />
                                </div>
                                <!-- <div class="mb-4">
                                    <input type="checkbox" class="form-check-input" id="remember" />
                                    <label for="remember" class="form-label">Remember Me</label>
                                </div> -->
                                <div class="d-grid">
                                    <button type="submit" class="btn text-light main-bg">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <footer class="fixed-bottom" style="background-color: #d4d4d4;">
            <ul class="nav justify-content-center ">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Politica de Cookies</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Politica de Privacidad</a></li>
            </ul>
        </footer>
    </div>
    <?php
    // if (isset($_SESSION['error'])) {
    //     echo $_SESSION['error'];
    // }
    // unset($_SESSION['error']);
    ?>
</body>

</html>