
//!TABLA DE DOCUMENTOS REGISTRADOS
$('#tabla__documentos__imagenes').DataTable({
    "language": {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "info": "Mostrando registros del: _START_ al _END_ de un total de: _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(Filtrado de un total de _MAX_ registros)",
        "sSearch": "Buscar:",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "sProcessing": "Procesando...",
    },
    responsive: "true",
    dom: 'lBfrtip',
    buttons: [{
        extend: 'pdfHtml5',
        text: '<i class="fas fa-file-pdf"></i> ',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-danger',
        filename: 'Reporte de diferentes tipos de archivos'
    }, ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
});
//!TABLA USUARIOS
$('#tabla__usuarios').DataTable({
    "language": {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "info": "Mostrando registros del: _START_ al _END_ de un total de: _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(Filtrado de un total de _MAX_ registros)",
        "sSearch": "Buscar:",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "sProcessing": "Procesando...",
    },
    responsive: "true",
    dom: 'lBfrtip',
    buttons: [{
        extend: 'pdfHtml5',
        text: '<i class="fas fa-file-pdf"></i> ',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-danger',
        filename: 'Reporte de usuarios registrados'
    }, ],
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
    ]
});