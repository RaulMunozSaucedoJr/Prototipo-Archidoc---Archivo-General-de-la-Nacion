<!DOCTYPE html>
<html lang="en">
<?php include_once'./Assets/TEMPLATES/HEAD/Head.php' ?>

<body class="d-flex flex-column min-vh-100">

    <div class="container-fluid">
        <div class="row">

            <!--//*NAVBAR VERSIÓN ESCRITORIO -->
            <?php include_once'./Assets/TEMPLATES/NAVBAR__ESCRITORIO/Navbar__Escritorio.php'?>
            <!--//*---------------------------->

            <!--//*NAVBAR VERSIÓN MOVIL -->
            <?php include_once'./Assets/TEMPLATES/NAVBAR__MOVIL/Navbar__Movil.php' ?>
            <!--//*----------------------->

            


        </div>
    </div>

    <!--//*FOOTER-->
    <?php include_once'./Assets/TEMPLATES/FOOTER/Footer.php' ?>
    <!--//*-------->

    <script>
    //!Verificar si el teléfono se encuentra en modo portrait
    if (isPortrait()) {
        swal({
            icon: "info",
            title: "¡Atención!",
            text: "Para una mejor visualización de los datos, favor de girar su teléfono horizontalmente.",
            timer: 8000,
            closeOnClickOutside: false,
            button: false,
            closeOnEsc: false,
        });
    }

    function isPortrait() {
        return window.innerHeight > window.innerWidth;
    }
    </script>

    <script>
    document.addEventListener("visibilitychange", () => {
        document.visibilityState == "hidden" ? document.title =
            "Por favor, cierre sesión sino encontro lo que buscaba." :
            document.title = "Realice la busqueda que deseé";
    });
    </script>

</body>

</html>