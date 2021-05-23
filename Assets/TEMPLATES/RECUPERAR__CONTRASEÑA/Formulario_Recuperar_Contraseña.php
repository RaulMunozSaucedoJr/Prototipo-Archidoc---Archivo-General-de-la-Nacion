<form method="post" action="#" class="needs-validation" id="recuperarContrasena" novalidate>
    <fieldset>
        <legend>Ingrese sus credenciales antiguas</legend>
        <div class="form-group">
            <label for="usuario__recuperar__contrasena" class="label__formulario">Usuario</label>
            <input type="text" inputmode="text" class="form-control inputs" id="usuario__recuperar__contrasena"
                name="UsuarioRecuperar" placeholder="Usuario" required>
            <p>
                <strong>
                    Este campo únicamente acepta su nombre de usuario previamente registrado.
                </strong>
            </p>
            <div class="invalid-feedback">
                Este campo NO puede estar vacio. Favor de verificarlo.
            </div>
        </div>
        <div class="form-group">
            <label for="contrasena__antigua" class="label__formulario">Contraseña Antigüa</label>
            <input type="password" inputmode="text" class="form-control inputs" id="contrasena__antigua"
                name="AntiguaContrasena" placeholder="Antigüa Contraseña" autocomplete="off" required>
            <p>
                <strong>
                    Este campo únicamente acepta su antigüa contraseña. O LO QUE RECUERDE DE ESTA.
                </strong>
            </p>
            <div class="invalid-feedback">
                Este campo NO puede estar vacio. Favor de verificarlo.
            </div>
        </div>
        <div class="form-group">
            <label for="contrasena__nueva" class="label__formulario">Nueva Contraseña</label>
            <input type="password" inputmode="text" class="form-control inputs" id="contrasena__nueva"
                name="NuevaContrasena" placeholder="Nueva Contraseña" autocomplete="off" required>
            <p>
                <strong>
                    Este campo acepta: Letras con ó sin acentuación | Numeros | Carácteres Especiales.<br>
                    Y la longitud de su nueva contraseña debe de ser entre 8 y 16 carácteres.
                </strong>
            </p>
            <div class="invalid-feedback">
                Este campo NO puede estar vacio. Favor de verificarlo.
            </div>
        </div>

        <div class="row">
            <div class="col-xs-11 col-sm-11 col-md-6 col-lg-6 col-xl-6 pt-1 mb-1">
                <button type="reset" class="limpiar__usuarios btn btn-outline-* btn-lg btn-block pt-2 pb-2"
                    id="limpiar__recuperar__contrasena">
                    Limpiar
                    <i class='bx bx-eraser'></i>
                </button>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-1 mb-1">
                <button type="submit" class="registrar__usuarios btn btn-outline-* btn-lg btn-block pt-2 pb-2"
                    id="recuperar__contraseña">
                    Registrar
                    <i class='bx bx-pencil'></i>
                </button>
            </div>
            <div class="col-12 text-center pt-2">
                <small>
                    Si tiene alguna duda, favor de realizar click en el icono de pregunta y se comunicara vía email con
                    el departamento de TIC´S.
                </small>
            </div>
        </div>

    </fieldset>
</form>