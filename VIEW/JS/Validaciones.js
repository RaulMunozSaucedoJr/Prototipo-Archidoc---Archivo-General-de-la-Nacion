/**
 * @param {expresiones} (import & from)
 */
import {
    usuarios,
    archivos,
    inputsUsuarios,
    inputsDocumentos,
    inputsRecuperarContraseĆ±a,
    inputsLogin,
    limpiarUsuarios,
    limpiarDocumentos,
    inputs__Regexs,
    boton__Volver__Arriba
} from '../JS/SELECTORES/Selectores.js'

import {
    verificarTamanos,
    vibrarLimpiar,
    compararContrasenas,
    volver__Arriba,
    showToTopButton
} from '../JS/FUNCIONES/Funciones.js'


! function () {
    "use strict";
    document.addEventListener("DOMContentLoaded", function () {

        /**
         * @param {function} (validar__InputsRegexs)
         * @param {parametros} (field, regex)
         * @param {metodo} (.test)
         * @param {parametro & valor & metodo} (field|value|.trim)
         * @param {operador ternario === if-else} (? : =)
         * @param {variable} (inputs__Vacios)
         * @param {metodo} (forEach)
         * @param {elemento} (item)
         * @param {metodo} (addEventListener === alzado de tecla)
         * @param {evento} (e.target === target actual === inputactual)
         * @param {evento & objeto & arreglo & [atributo & className & valor & metodo]} (e.target, inputs__Regexs[e.target.attributes.name.value.trim])
         **/

        const validar__InputsxRegexs = (field, regex) => {
            regex.test(field.value.trim()) ? field.className = 'valido' : field.className = 'invalido';
        }

        let inputs__Vacios = document.querySelectorAll('input');
        inputs__Vacios.forEach(item => item.addEventListener(
            'keyup', e => {
                validar__InputsxRegexs(e.target, inputs__Regexs[e.target.attributes.name.value.trim()])
            }
        ));

        let textarea = document.querySelectorAll('textarea');
        textarea.forEach(item => item.addEventListener(
            'keyup', e => {
                validar__InputsxRegexs(e.target, inputs__Regexs[e.target.attributes.name.value.trim()])
            }
        ));

        /**
         *@param {constante} (inputsUsuarios & inputsDocumentos & inputsRecuperarContraseĆ±a & inputsLogin)
         *@param {metodo} (forEach)
         *@param {elemento} (input)
         *@param {metodo} (addEventListener)
         *@param {funcion} (verificarTamanos) 
         **/

        inputsUsuarios.forEach((input) => {
            input.addEventListener('keyup', verificarTamanos);
        });
        inputsDocumentos.forEach((input) => {
            input.addEventListener('keyup', verificarTamanos);
        });
        inputsRecuperarContraseĆ±a.forEach((input) => {
            input.addEventListener('keyup', verificarTamanos);
        });
        inputsLogin.forEach((input) => {
            input.addEventListener('keyup', verificarTamanos);
        });

        /**
         * @param {funcion} (reset)
         * @param {constante} (usuarios && archivos)
         * @param {metodo} (reset && reload)
         */

        const reset = () => {
            usuarios.reset();
            archivos.reset();
            location.reload();
        };

        /**
         * @param {funcion} (validarExntesionesFoto & validarExtensionesArchivos)
         * @param {variables} (inputFoto & rutaFoto & extensionesImagenesPermitidas & extensionesArchivosPermitidas)
         * @param {metodo} (exec)
         * @param {objeto} (FileReader)
         * 
         */

        const validarExtensionesFoto = () => {
            var inputFoto = document.getElementById('fotoempleado');
            var rutaFoto = inputFoto.value;
            var extensionesImagenesPermitidas = /(.jpg|.jpeg|.png|.gif|.JPG|.JPGE|.PNG|.GIF)$/i;
            if (!extensionesImagenesPermitidas.exec(rutaFoto)) {
                swal({
                    icon: "info",
                    title: "Ā”AtenciĆ³n!",
                    text: "Los formatos de imagenes/fotos aceptados son:\n" + ".jpg, .png, .jpge, .gif",
                    timer: 3000,
                    closeOnClickOutside: false,
                    button: false,
                    closeOnEsc: false,
                });
                inputFoto.value = '';
                return false;
            } else {
                if (inputFoto.files && inputFoto.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        document.getElementById('imagePreview').innerHTML = '<img src="' + e.target.result + '"/>';
                    };
                    reader.readAsDataURL(inputFoto.files[0]);
                }
            }
        };

        const validarExtensionesArchivos = () => {
            const inputDocumentos = document.getElementById('multiples_archivos');
            var rutaArchivos = inputDocumentos.value;
            var exntesionesArchivosPermitidas = /(.pdf|.doc|.docx|.xlxs|.PDF|.DOC|.DOCX|.XLXS)$/i;
            if (!exntesionesArchivosPermitidas.exec(rutaArchivos)) {
                swal({
                    icon: "info",
                    title: "Ā”AtenciĆ³n!",
                    text: "Los formatos de documentos aceptados son:\n" + "pdf, doc, docx, .xlxs",
                    timer: 3000,
                    closeOnClickOutside: false,
                    button: false,
                    closeOnEsc: false,
                });
                inputDocumentos.value = '';
                return false;
            } else {
                if (inputDocumentos.files && inputDocumentos.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        document.querySelector('#pdfViewer').innerHTML = '<img src="' + e.target.result + '"/>';
                    };
                    reader.readAsDataURL(inputDocumentos.files[0]);
                }
            }
        };

        /**
         * @param {funcion} (Listeners)
         */

        const Listeners = () => {

            /**
             * @param {FunciĆ³n ValidaciĆ³n Default Bootstrap}
             */

            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);

            /**
             *@param {inputs} (fotoempleado & multiples_archivos)
             *@param {funciones} (validarExtensionesFoto & validarExtensionesArchivos) 
             **/

            document.getElementById("fotoempleado").addEventListener("change", validarExtensionesFoto);
            document.getElementById("multiples_archivos").addEventListener("change", validarExtensionesArchivos);

            /**
             * @param {botones/inputs-variables} (limpiarUsuarios & limpiarDocumentos & limpiarUsuarios & usuarios & boton__Volver__Arriba)
             * @param {event} (click & submit & scroll)
             * @param {funciones} (reset & vibrarLimpiar & compararContrasenas & volver__Arriba & showToTopButton)
             */

            limpiarUsuarios.addEventListener("click", reset);
            limpiarDocumentos.addEventListener("click", reset);
            limpiarUsuarios.addEventListener("click", vibrarLimpiar);
            limpiarDocumentos.addEventListener("click", vibrarLimpiar);
            usuarios.addEventListener("submit", compararContrasenas);
            boton__Volver__Arriba.addEventListener('click', volver__Arriba);
            window.addEventListener('scroll', showToTopButton);

            /**
             * @param {elemento} (window)
             * @param {metodo} (onload)
             * @param {variables} ( fecha & mes & ano & dia)
             * @param {funciones} (getMonth & getDate & getFullYear)
             */

            window.onload = function () {
                var fecha = new Date(); //Fecha actual
                var mes = fecha.getMonth() + 1; //obteniendo mes
                var dia = fecha.getDate(); //obteniendo dia
                var ano = fecha.getFullYear(); //obteniendo aĆ±o
                if (dia < 10)
                    dia = '0' + dia; //agrega cero si el menor de 10
                if (mes < 10)
                    mes = '0' + mes //agrega cero si el menor de 10
                document.getElementById('fecha_registro').value = ano + "-" + mes + "-" + dia;
            }

        };

        /**
          //!Ejecuta la funciĆ³n Listeners, a su vez estĆ” ejectua las demĆ”s funciones que contienen sus respectivos parĆ”metros y objetos con sus propiedades y valores.
         * @param {funcion} (Listeners)
         */
        Listeners();

    });
}();