<!DOCTYPE html>
<html lang="en">

<!--//* HEAD -->
<?php include_once'./Assets/TEMPLATES/HEAD/Head.php' ?>
<!--//*---------->

<body class="d-flex flex-column min-vh-100">

    <div class="container pt-5">
        <div class="row">
            <div class="login col-xs-11 col-sm-11 col-md-6 col-lg-6 col-lg-6 col-xl-6 pt-5 mb-2">
                <form method="post" action="#" class="needs-validation" id="login" novalidate>
                    <fieldset>
                        <legend>LOGIN ARCHIDOC</legend>
                        <div class="form-group">
                            <label for="usuario__login" class="label__formulario">Usuario</label>
                            <input type="text" inputmode="text" class="form-control inputs" id="usuario__login"
                                name="LoginUsuario" placeholder="Usuario" required>
                            <p>
                                <strong>
                                    Este campo únicamente acepta: Letras con ó sin acentuación, numeros y carácteres
                                    especiales.
                                </strong>
                            </p>
                            <div class="invalid-feedback">
                                Este campo NO puede estar vacio. Favor de verificarlo.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contrasena__login" class="label__formulario">Contraseña</label>
                            <input type="password" inputmode="text" class="form-control inputs" id="contrasena__login"
                                name="LoginContrasena" placeholder="Contraseña" autocomplete="off" required>
                            <p>
                                <strong>
                                    Este campo únicamente acepta: Letras con ó sin acentuación, numeros y carácteres
                                    especiales.
                                </strong>
                            </p>
                            <div class="invalid-feedback">
                                Este campo NO puede estar vacio. Favor de verificarlo.
                            </div>
                        </div>
                    </fieldset>
                    <div class="row">
                        <div class="col-xs-11 col-sm-11 col-md-6 col-lg-6 col-xl-6 pt-2 mb-1">
                            <button type="reset" class="limpiar__usuarios btn btn-outline-* btn-lg pt-2 pb-2"
                                id="limpiar__login">
                                Limpiar
                                <i class='bx bx-eraser'></i>
                            </button>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-2 mb-1">
                            <button type="submit" class="registrar__usuarios btn btn-outline-* btn-lg pt-2 pb-2"
                                id="ingresar__usuarios">
                                Ingresar
                                <i class='bx bx-log-in'></i>
                            </button>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-2 mb-1">
                            <div class="form-group recuperar__contrasena">
                                <a class="recuperar__contrasena__link__externo" href="/VIEW/Recuperar__Contraseña.php">
                                    Click aquí para recuperar tus credenciales.
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-lg-6 col-xl-6 pt-3 mb-3" id="login__contenedor__imagen">
                <img src="./Assets/SVG/Ilustracion__Login.svg" class="login__Ilustracion img-fluid"
                    alt="Ilustración Login">
            </div>
        </div>
    </div>

    <!--//* FOOTER-->
    <?php include_once'./Assets/TEMPLATES/RECURSOS__FOOTER/Recursos__Footer.php'?>
    <!--//*-------->

    <script src="./VIEW/JS/Validaciones.js" type="module"></script>

    <script>
    const login = document.getElementById("login");
    const limpiarLogin = document.getElementById("limpiar__login");
    const reset = () => {
        login.reset()
        location.reload();
    };
    const Listenners = () => {
        limpiarLogin.addEventListener("click", reset);
    }
    Listenners();
    </script>


    <script>
    document.addEventListener("visibilitychange", () => {
        document.visibilityState == "hidden" ? document.title = "Por seguridad no comparta sus credenciales con nadie." :
            document.title = "Ingrese sus credenciales.";
    });
    </script>

</body>

</html>