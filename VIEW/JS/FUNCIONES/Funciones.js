import {
    inputsUsuarios,
    inputsDocumentos,
    inputsRecuperarContraseña,
    inputsLogin,
    contraseña,
    repetir__contraseña
} from '../SELECTORES/Selectores.js'

/**
 * //!Se consume desde la API.
 * @param {función} (vibrarLimpiar)
 * @param {metodo} (navigator)
 * @param {funcion} (vibrate)
 * 
 */
export const vibrarLimpiar = () => {
    navigator.vibrate([100]);
}

/**
 * @param {funcion} (verificarTamanos)
 * @param {ciclo/loop} (for)
 * @param {ExpresionInicial}(var i = 0, input__actual)
 * @param {ExpresionCondiconal && ExpresionIncremental && variable} (input__actual =  variable === inputsUsuarios[i++];)
 * @param {Ciclo Condicional} (if)
 * @param {variable} (input__actual.value.length >=50 () => Obtener el valor de los distintos input´s y se verifica que no sea mayor o igual a 50 )
 * @param {funcion} (swal)
 */
export const verificarTamanos = () => {
    for (var i = 0, input__actual; input__actual = inputsUsuarios[i++];) {
        if (input__actual.value.length >= 50) {
            swal({
                icon: "warning",
                title: "¡Atención!",
                text: "Ningún campo debe de tener más de 50 letras/carácteres/números",
                timer: 3000,
                closeOnClickOutside: false,
                button: false,
                closeOnEsc: false,
            });
        }
    }
    for (var i = 0, input__actual; input__actual = inputsDocumentos[i++];) {
        if (input__actual.value.length >= 50) {
            swal({
                icon: "warning",
                title: "¡Atención!",
                text: "Ningún campo debe de tener más de 50 letras/carácteres/números",
                timer: 3000,
                closeOnClickOutside: false,
                button: false,
                closeOnEsc: false,
            });
        }
    }
    for (var i = 0, input__actual; input__actual = inputsRecuperarContraseña[i++];) {
        if (input__actual.value.length >= 50) {
            swal({
                icon: "warning",
                title: "¡Atención!",
                text: "Ningún campo debe de tener más de 50 letras/carácteres/números",
                timer: 3000,
                closeOnClickOutside: false,
                button: false,
                closeOnEsc: false,
            });
        }
    }
    for (var i = 0, input__actual; input__actual = inputsLogin[i++];) {
        if (input__actual.value.length >= 30) {
            swal({
                icon: "warning",
                title: "¡Atención!",
                text: "Ningún campo debe de tener más de 30 letras/carácteres/números",
                timer: 3000,
                closeOnClickOutside: false,
                button: false,
                closeOnEsc: false,
            });
        }
    }
};

/**
 * 
 * @param {function} (compararContrasenas)
 * @param {metodo} (e.preventDefault)
 * @param {constantes} (contrasena & repetir__contrasena)
 * @param {Operador Lógico} (!==)
 * @param {Propiedad Valor} (value)
 * @param {function} (swal) 
 */

export const compararContrasenas = (e) => {
    if (contraseña.value !== repetir__contraseña.value) {
        e.preventDefault();
        swal({
            icon: "warning",
            title: "¡Atención!",
            text: "Las contraseñas NO coinciden. Favor de verificarlas.",
            timer: 3000,
            closeOnClickOutside: false,
            button: false,
            closeOnEsc: false,
        });
    }
}

/**
 * @param {funcion} (reset)
 * @param {constante} (usuarios && archivos)
 * @param {metodo} (reset && reload)
 */

export const reset = () => {
    usuarios.reset();
    archivos.reset();
    location.reload();
};