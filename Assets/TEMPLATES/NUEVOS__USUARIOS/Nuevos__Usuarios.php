<form method="post" action="#" class="needs-validation" id="usuarios" novalidate>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <fieldset>
                <legend>Datos Personales</legend>
                <div class="form-group">
                    <label for="nombres" class="label__formulario">Nombre(s)</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="nombres" name="Nombres"
                        placeholder="Nombre(s)" required>
                    <p>Este campo debe tener una longitud entre 8 y 24 letras.
                        <strong>
                            Este campo únicamente acepta: Letras, Letras Acentuadas, Espacios en Blanco.
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="apellido__paterno" class="label__formulario">Apellido Paterno</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="apellidopaterno"
                        name="Apellido_Paterno" placeholder="Apellido Paterno" required>
                    <p>Este campo debe tener una longitud entre 8 y 24 letras.
                        <strong>
                            Este campo únicamente acepta: Letras, Letras Acentuadas, Espacios en Blanco.
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="apellido__materno" class="label__formulario">Apellido Materno</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="apellidomaterno"
                        name="Apellido_Materno" placeholder="Apellido Materno" required>
                    <p>Este campo debe tener una longitud entre 8 y 24 letras.
                        <strong>
                            Este campo únicamente acepta: Letras, Letras Acentuadas, Espacios en Blanco.
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="correo__personal" class="label__formulario">Correo Personal</label>
                    <input type="text" inputmode="email" class="form-control inputs" id="correopersonal"
                        name="Correo_Personal" placeholder="Correo Electrónico Personal" required>
                    <p>Este campo debe tener una longitud entre 8 y 24 letras/carácteres/numeros.
                        <strong>
                            Debe ingresar un formato de correo electrónico valido. Ejemplo: correo@gmail.com
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefono__personal" class="label__formulario">Teléfono Fijo Personal</label>
                    <input type="text" inputmode="tel" class="form-control inputs" id="telefonofijopersonal"
                        name="Telefono_Fijo" placeholder="Teléfono Personal" required>
                    <p>Este campo debe tener una longitud entre 10 y 20 numeros/digitos. NO debe contener espacios,
                        guiones, etc.
                        <strong>
                            Recuerde que la nueva marcación comienza con 55. Ejemplo: 5585233446
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefono__movil__personal" class="label__formulario">Teléfono Movil Personal</label>
                    <input type="text" inputmode="tel" class="form-control inputs" id="telefonomovilpersonal"
                        name="Telefono_Movil" placeholder="Teléfono Móvil Personal" required>
                    <p>Este campo debe tener una longitud entre 10 y 20 numeros/digitos. NO debe contener espacios,
                        guiones, etc.
                        <strong>
                            Recuerde que la nueva marcación comienza con 55. Ejemplo: 5585233446
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="direccion__personal" class="label__formulario">Dirección</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="direccionpersonal"
                        name="Direccion" placeholder="Dirección" required>
                    <p>Este campo debe tener una longitud entre 16 y 32 letras/carácteres/numeros.
                        <strong>
                            Este campo acepta desde letras, numeros, espacios y carácteres especiales.
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="curp" class="label__formulario">Curp</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="curp" name="Curp"
                        oninput="validarInput(this)" placeholder="Curp" required>
                    <p>Este campo debe tener una longitud de 18 letras y numeros.<br>
                        <strong>
                            En caso de duda cual es su curp, visite el siguiente link:<br>
                            <a class="buscar__Curp" href="https://www.gob.mx/curp/">
                                ¡Click aquí!.
                                <i class='bx bx-search'></i>
                            </a>
                        </strong>
                    </p>
                    <pre id="resultado"></pre>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <fieldset>
                <legend>Datos del Puesto</legend>
                <div class="form-group">
                    <label for="correo__trabajo" class="label__formulario">Correo Laboral</label>
                    <input type="text" inputmode="email" class="form-control inputs" id="correotrabajo"
                        name="Correo_Laboral" placeholder="Correo Electrónico Laboral" required>
                    <p>Este campo debe tener una longitud entre 8 y 24 letras/carácteres/numeros.
                        <strong>
                            Debe ingresar un formato de correo electrónico valido. Ejemplo: correo@gmail.com
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="numero__empleado" class="label__formulario">Identificador Empleado</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="identificadorempleado"
                        name="Identificador_Empleado" placeholder="Numero de Empleado" required>
                    <p>Este campo debe tener una longitud entre 8 y 24 letras/carácteres especiales/numeros.<br>
                        <strong>
                            Ejemplo: Programador Jr.# 02
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="area__trabajo" class="label__formulario">Area de Trabajo</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="areatrabajo" name="Area_Trabajo"
                        placeholder="Área de Trabajo" required>
                    <p>Este campo debe tener una longitud entre 8 y 32 letras/numeros.<br>
                        <strong>
                            Ejemplo: Programador Jr.# 02
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="foto__empleado">Foto del empleado</label>
                    <input type="file" class="btn btn-outline-* btn-lg" name="FotoEmpleado" id="fotoempleado"
                        name="foto_empleado" required>
                    <p>El nombre de este archivo no puede tener más de 48 letras/numeros/carácteres especiales.</p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                    <div id="imagePreview"></div>
                </div>
            </fieldset>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <fieldset>
                <legend>Credenciales de Usuario</legend>
                <div class="form-group">
                    <label for="usuario__empleado" class="label__formulario">Usuario</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="usuarioempleado" name="Usuario"
                        placeholder="Usuario" required>
                    <p>Este campo debe tener una longitud entre 8 y 16 letras, numeros y carácteres especiales.</p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label for="contrasena__1" class="label__formulario">Contraseña</label>
                            <div class="relative">
                                <input type="password" inputmode="password" class="form-control inputs"
                                    id="contrasena__1" name="Contrasena_1" placeholder="Contraseña" autocomplete="off"
                                    required>
                                <p>Este campo debe tener una longitud entre 8 y 16 letras, numeros y carácteres
                                    especiales.</p>
                                <div class="invalid-feedback">
                                    Este campo NO puede estar vacio. Favor de verificarlo.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="form-group">
                            <label for="contrasena__2" class="label__formulario">Repetir Contraseña</label>
                            <div class="relative">
                                <input type="password" inputmode="password" class="form-control inputs"
                                    id="contrasena__2" name="Contrasena_2" placeholder="Repetir Contraseña"
                                    autocomplete="off" required>
                                <p>Este campo debe tener una longitud entre 8 y 16 letras, numeros y carácteres
                                    especiales.</p>
                                <div class="invalid-feedback">
                                    Este campo NO puede estar vacio. Favor de verificarlo.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-2 mb-2">
            <button type="reset" class="limpiar__usuarios btn btn-outline-* btn-lg pt-2 pb-2" id="limpiar__usuarios">
                Limpiar
                <i class='bx bx-eraser'></i>
            </button>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-2 mb-2">
            <button type="submit" class="registrar__usuarios btn btn-outline-* btn-lg pt-2 pb-2"
                id="registrar__usuarios">
                Registrar
                <i class='bx bx-pencil'></i>
            </button>
        </div>
    </div>

</form>

<script src="/VIEW/JS/Validaciones.js" type="module"></script>

<script>
function curpValida(curp) {
    var re =
        /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);

    if (!validado)
        return false;

    function digitoVerificador(curp17) {
        var diccionario = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma = 0.0,
            lngDigito = 0.0;
        for (var i = 0; i < 17; i++)
            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10) return 0;
        return lngDigito;
    }

    if (validado[2] != digitoVerificador(validado[1]))
        return false;
    return true;
}

function validarInput(input) {
    var curp = input.value.toUpperCase(),
        resultado = document.getElementById("resultado"),
        valido = "No válido";

    if (curpValida(curp)) {
        valido = "Válido";
        resultado.classList.add("ok");
    } else {
        resultado.classList.remove("ok");
    }
    resultado.innerText = "CURP: " + curp + "\nCurp: " + valido;
}
</script>