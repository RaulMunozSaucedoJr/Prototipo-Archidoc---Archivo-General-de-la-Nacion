<!DOCTYPE html>
<html lang="en">

<!--//* HEADER -->
<?php include_once'../Assets/TEMPLATES/HEAD/Head.php' ?>
<!--//*---------->

<body class="d-flex flex-column min-vh-100">

    <div class="container">
        <div class="row">

            <div class="recuperarContraseña col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3 pt-3 mb-1">
                <?php include_once'../Assets/TEMPLATES/RECUPERAR__CONTRASEÑA/Formulario_Recuperar_Contraseña.php' ?>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-3 mt-3 mb-1">
                <img src="../Assets/SVG/RecuperarContrasena.svg" class="recuperarContraseña__Ilustracion img-fluid"
                    alt="Ilustración Recuperar Contraseña">
            </div>
        </div>
    </div>

    <!--//* FOOTER-->
    <?php include_once'../Assets/TEMPLATES/RECURSOS__FOOTER/Recursos__Footer.php'?>
    <!--//*-------->

    <script src="../VIEW/JS/Validaciones.js" type="module"></script>

    <script>
    const recuperarContrasena = document.getElementById("recuperarContrasena");
    const limpiarRecuperarContrasena = document.getElementById("limpiar__recuperar__contrasena");
    const reset = () => {
        recuperarContrasena.reset()
        location.reload();
    };
    const Listenners = () => {
        limpiarRecuperarContrasena.addEventListener("click", reset);
    }
    Listenners();
    </script>

    <script>
    document.addEventListener("visibilitychange", () => {
        document.visibilityState == "hidden" ? document.title = "No deje abierta esta pagina sino planea cambiar su contraseña." :
            document.title = "Cambiar contraseña.";
    });
    </script>

</body>

</html>