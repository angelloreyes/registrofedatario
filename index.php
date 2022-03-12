<?php
require_once("config/conexion.php");
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    require_once("models/Usuario.php");
    $usuario = new Usuario();
    $usuario->login();
}

?>

<!DOCTYPE html>
<html>

<head lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fedatarios - Login</title>
    <link rel="stylesheet" href="public/css/separate/pages/login.min.css">
    <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main.css">
</head>

<body>

    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <form class="sign-box" action="" method="POST" id="login_form">
                    
                    <div class="sign-avatar">
                        <img src="public/img/avatar-sign.png" alt="">
                    </div>
                    <header class="sign-title">Acceso</header>
                    <?php
                    if (isset($_GET["m"])) {
                        switch ($_GET["m"]) {
                            case "1";
                    ?>
                                <div class="alert alert-danger alert-icon alert-close alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <i class="font-icon font-icon-warning"></i>
                                    El Usuario y/o Contraseña son incorrectos.
                                </div>

                            <?php
                                break;

                            case "2";
                            ?>
                                <div class="alert alert-warning alert-icon alert-close alert-dismissible fade in" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <i class="font-icon font-icon-warning"></i>
                                    Los campos estan vacios.
                                </div>

                    <?php
                                break;
                        }
                    }
                    ?>
                    <div class="form-group">
                        <input type="email" id="usu_correo" name="usu_correo" class="form-control" placeholder="Correo" />
                    </div>
                    <div class="form-group">
                        <input type="password" id="usu_pass" name="usu_pass" class="form-control" placeholder="Contraseña" />
                    </div>
                    <div class="form-group">
                        <div class="checkbox float-left">
                            <input type="checkbox" id="signed-in" />
                            <label for="signed-in">Recordar</label>
                        </div>
                    </div>
                    <input type="hidden" name="enviar" class="form-control" value="si">
                    <button type="submit" class="btn btn-rounded">Acceder</button>
                </form>
            </div>
        </div>
    </div>
    <!--.page-center-->


    <script src="public/js/lib/jquery/jquery.min.js"></script>
    <script src="public/js/lib/tether/tether.min.js"></script>
    <script src="public/js/lib/bootstrap/bootstrap.min.js"></script>
    <script src="public/js/plugins.js"></script>
    <script type="text/javascript" src="public/js/lib/match-height/jquery.matchHeight.min.js"></script>
    <script>
        $(function() {
            $('.page-center').matchHeight({
                target: $('html')
            });

            $(window).resize(function() {
                setTimeout(function() {
                    $('.page-center').matchHeight({
                        remove: true
                    });
                    $('.page-center').matchHeight({
                        target: $('html')
                    });
                }, 100);
            });
        });
    </script>
    <script src="public/js/app.js"></script>
</body>

</html>