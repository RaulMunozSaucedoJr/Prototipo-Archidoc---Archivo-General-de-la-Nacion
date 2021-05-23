<!DOCTYPE html>
<html lang="en">
<?php include'./Assets/TEMPLATES/HEAD/Head.php' ?>

<body class="d-flex flex-column min-vh-100">

    <div class="container-fluid">
        <div class="row">

            <!--//*NAVBAR VERSIÓN ESCRITORIO -->
            <?php include'./Assets/TEMPLATES/NAVBAR__ESCRITORIO/Navbar__Escritorio.php'?>
            <!--//*---------------------------->

            <!--//*NAVBAR VERSIÓN MOVIL -->
            <?php include'./Assets/TEMPLATES/NAVBAR__MOVIL/Navbar__Movil.php' ?>
            <!--//*----------------------->

            <div class="col-xs-12 col-4 pb-5">
                <?php include'./Assets/TEMPLATES/NAVEGACION__LATERAL/Navegacion__Lateral.php' ?>
            </div>

            <div class="col-xs-12 col-8 pb-5 mb-5">
                <div class="contenido__General">
                    <h2>Auto Sidebar</h2>
                    <p>This sidebar is as tall as its content (the links), and is always shown.</p>
                    <p>Scroll down the page to see the result.</p>
                    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset
                        concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis
                        evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no
                        molestiae voluptatibus.</p>
                    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset
                        concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis
                        evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no
                        molestiae voluptatibus.</p>
                    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset
                        concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis
                        evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no
                        molestiae voluptatibus.</p>
                    <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, illum definitiones no quo, maluisset
                        concludaturque et eum, altera fabulas ut quo. Atqui causae gloriatur ius te, id agam omnis
                        evertitur eum. Affert laboramus repudiandae nec et. Inciderint efficiantur his ad. Eum no
                        molestiae voluptatibus.</p>
                </div>
            </div>

        </div>
    </div>

    <!--//*FOOTER-->
    <?php include'./Assets/TEMPLATES/FOOTER/Footer.php' ?>
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