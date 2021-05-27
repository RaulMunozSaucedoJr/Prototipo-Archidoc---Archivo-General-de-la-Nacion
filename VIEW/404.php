<!DOCTYPE html>
<html lang="en">

<!--//* HEAD -->
<?php include_once'../Assets/TEMPLATES/HEAD/Head.php' ?>
<!--//*---------->

<body class="d-flex flex-column min-vh-100">

    <!-- BARRA LATERAL REDES SOCIALES -->
    <?php include_once'../Assets/TEMPLATES/REDES__SOCIALES/Redes-Sociales.php' ?>
    <!---------------------------------->

    <div class="container pt-5">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 error">
                <h5 class="error__Titulo">
                    Página NO encontrada.
                </h5>
                <p class="error__Parrafo">
                    Por favor, regrese a nuestra página de inicio.
                </p>
                <a href="/Archidoc.php">
                    <button type="button" class="registrar__usuarios btn btn-outline-* btn-lg btn-block"
                        id="regresar__inicio">
                        Inicio
                        <i class='bx bx-home-alt'></i>
                    </button>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img src="../Assets/SVG/PrimerIlustracion404.svg" class="Ilustracion img-fluid"
                    alt="Ilustración Pagina 404">
            </div>
        </div>
    </div>


    <!--//* FOOTER-->
    <?php include_once'../Assets/TEMPLATES/RECURSOS__FOOTER/Recursos__Footer.php'?>
    <!--//*-------->

    <script>
    document.addEventListener("visibilitychange", () => {
        document.visibilityState == "hidden" ? document.title = "Lo sentimos, regrese a la pagina principal." :
            document.title =
            "Recurso no encontrado.";
    });
    </script>

</body>

</html>