<!--//! PARA VISUALIZAR CORRECTAMENTE LOS COMENTARIOS EN TODOS LOS ARCHIVOS, FAVOR DE INSTALAR LA EXTENSIÓN:-->
<!--//! Better Comments-->

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

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-2 mb-5 mt-2 pb-5">

                <div class="wrapper">
                    <div class="buttonWrapper">
                        <!--//*Botones para navegar entre las diferentes tabs, las cuales contienen diferentes formularios y registros en tablas-->
                        <button class="tab-button" data-id="nuevos__usuarios">
                            Registrar Usuarios
                        </button>
                        <button class="tab-button" data-id="nuevos__documentos">
                            Registrar Archivos
                        </button>
                        <!--//*------------------------------------------------------------------------------------------------------------------->
                    </div>

                    <div class="contentWrapper">
                        <div class="contenido content active" id="nuevos__usuarios">
                            <?php include'./Assets/TEMPLATES/NUEVOS__USUARIOS/Nuevos__Usuarios.php' ?>
                        </div>

                        <div class="contenido content" id="nuevos__documentos">
                            <?php include'./Assets/TEMPLATES/NUEVAS__IMAGENES__DOCUMENTOS/Nuevos__Documentos.php' ?>
                        </div>
                    </div>

                </div>
            </div>

            <!--//*BOTÓN VOLVER ARRIBA -->
            <?php include'./Assets/TEMPLATES/REGRESAR__ARRIBA/Regresar__Arriba.php' ?>
            <!--//*----------------------->

        </div>
    </div>

    <!--//*FOOTER-->
    <?php include'./Assets/TEMPLATES/FOOTER/Footer.php' ?>
    <!--//*-------->

    <!-- VALIDACIONES DE LOS DISTINTOS FORMULARIOS -->
    <script src="./VIEW/JS/Validaciones.js" type="module"></script>

    <script>
    // Loaded via <script> tag, create shortcut to access PDF.js exports.
    var pdfjsLib = window['pdfjs-dist/build/pdf'];
    // The workerSrc property shall be specified.
    pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

    $("#multiples_archivos").on("change", function(e) {
        var file = e.target.files[0]
        if (file.type == "application/pdf") {
            var fileReader = new FileReader();
            fileReader.onload = function() {
                var pdfData = new Uint8Array(this.result);
                // Using DocumentInitParameters object to load binary data.
                var loadingTask = pdfjsLib.getDocument({
                    data: pdfData
                });
                loadingTask.promise.then(function(pdf) {
                    console.log('PDF loaded');

                    // Fetch the first page
                    var pageNumber = 1;
                    pdf.getPage(pageNumber).then(function(page) {
                        console.log('Page loaded');

                        var scale = 1.5;
                        var viewport = page.getViewport({
                            scale: scale
                        });

                        // Prepare canvas using PDF page dimensions
                        var canvas = $("#pdfViewer")[0];
                        var context = canvas.getContext('2d');
                        canvas.height = viewport.height;
                        canvas.width = viewport.width;

                        // Render PDF page into canvas context
                        var renderContext = {
                            canvasContext: context,
                            viewport: viewport
                        };
                        var renderTask = page.render(renderContext);
                        renderTask.promise.then(function() {
                            console.log('Page rendered');
                        });
                    });
                }, function(reason) {
                    // PDF loading error
                    console.error(reason);
                });
            };
            fileReader.readAsArrayBuffer(file);
        }
    });
    </script>



    <script>
    document.addEventListener("visibilitychange", () => {
        document.visibilityState == "hidden" ? document.title =
            "NO realice registros incompletos." :
            document.title = "Registro de Usuarios & Archivos.";
    });
    </script>

</body>

</html>