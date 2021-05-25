<!--//! PARA VISUALIZAR CORRECTAMENTE LOS COMENTARIOS EN TODOS LOS ARCHIVOS, FAVOR DE INSTALAR LA EXTENSIÓN:-->
<!--//! Better Comments-->

<!DOCTYPE html>
<html lang="en">

<?php include_once'../Assets/TEMPLATES/HEAD/Head.php' ?>

<body class="d-flex flex-column min-vh-100">

    <div class="container-fluid">
        <div class="row">

            <!--//*NAVBAR VERSIÓN ESCRITORIO -->
            <?php include_once'../Assets/TEMPLATES/NAVBAR__ESCRITORIO/Navbar__Escritorio.php'?>
            <!--//*---------------------------->

            <!--//*NAVBAR VERSIÓN MOVIL -->
            <?php include_once'../Assets/TEMPLATES/NAVBAR__MOVIL/Navbar__Movil.php' ?>
            <!--//*----------------------->

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 pt-5">
                <img src="../Assets/SVG/BuscarIlustracion.svg" class="Ilustracion__Registros img-fluid"
                    alt="Ilustración Registros">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 pt-2 mb-2">
                <div class="wrapper">
                    <div class="buttonWrapper">
                        <!--//*Botones para navegar entre las diferentes tabs, las cuales contienen diferentes formularios y registros en tablas-->
                        <button class="tab-button" data-id="mostrar__usuarios">
                            Buscar Usuarios Registrados
                        </button>
                        <button class="tab-button" data-id="mostrar__documentos">
                            Buscar Documentos e Imagenes Registrados
                        </button>
                        <!--//*------------------------------------------------------------------------------------------------------------------->
                    </div>
                    <div class="contentWrapper">
                        <!--//*Total de usuarios--------------------------->
                        <div class="contenido content" id="mostrar__usuarios">
                            <?php include_once'../Assets/TEMPLATES/TABLA__USUARIOS/Usuarios__Registrados.php' ?>
                        </div>
                        <!--//*-------------------------------------------->

                        <!--//*Total de documentos e imagenes ------------------------->
                        <div class="contenido content" id="mostrar__documentos">
                            <?php include_once'../Assets/TEMPLATES/TABLA__IMAGENES__DOCUMENTOS/Documentos__Imagenes__Registrados.php' ?>
                        </div>
                        <!--//*-------------------------------------------------------->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- TAB´S -->
    <script src="../VIEW/JS/Tabs.js" type="module"></script>

    <!--//*FOOTER-->
    <?php include_once'../Assets/TEMPLATES/FOOTER/Footer.php' ?>
    <!--//*-------->

    <script>
    //!Verificar si el teléfono se encuentra en modo portrait
    if (isPortrait()) {
        swal({
            icon: "info",
            title: "¡Atención!",
            text: "Para una mejor visualización de los datos mostrados en las diferentes tablas, favor de girar su teléfono horizontalmente.",
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

</body>

</html>