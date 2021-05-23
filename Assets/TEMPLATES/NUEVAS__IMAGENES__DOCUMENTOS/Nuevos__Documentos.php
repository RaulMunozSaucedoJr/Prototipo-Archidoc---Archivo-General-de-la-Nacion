<form method="post" class="needs-validation" id="documentos__imagenes" action="#" novalidate>
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <fieldset>
                <legend>Datos Generales del Archivo</legend>
                <div class="form-group">
                    <label for="nombre_archivo" class="label__formulario">Titulo del Archivo</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="nombre_archivo"
                        name="NombreArchivo" placeholder="Titulo del Archivo" required>
                    <p>Este campo debe tener una longitud entre 8 y 24 carácteres.
                        <strong>
                            Este campo únicamente acepta: Letras, letras acentuadas & espacios en blanco.
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="autor_archivo" class="label__formulario">Autor del Archivo</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="autor_archivo"
                        name="AutorArchivo" placeholder="Autor del Archivo" required>
                    <p>Este campo debe tener una longitud entre 24 y 48 carácteres.
                        <strong>
                            Este campo únicamente acepta: Letras, Letras Acentuadas, Numeros & Carácteres Especiales.
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="fecha_creacion" class="label__formulario">Fecha de Creación</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="fecha_creacion"
                        name="FechaCreacion" placeholder="Fecha de Creación" required>
                    <p>
                        Este campo debe tener una fecha con los siguientes formatos:<br>
                        <strong>
                            12/12/2021<br>
                            12-12-2021<br>
                            12.12.2021<br>
                        </strong>
                        Aunque se le aconseja ingresarla con el primer formato únicamente.
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="lugar_creacion" class="label__formulario">Lugar de Creación</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="lugar_creacion"
                        name="LugarCreacion" placeholder="Lugar de Creación" required>
                    <p>Este campo debe tener una longitud entre 12 y 36 carácteres.
                        <strong>
                            Este campo únicamente acepta: Letras, Letras Acentuadas & Carácteres Especiales.
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion" class="label__formulario">Descripción</label>
                    <textarea class="form-control" id="descripcion" rows="3" name="Descripcion"></textarea>
                    <p>Este campo debe tener una longitud entre 16 y 60 carácteres.
                        <strong>
                            Este campo únicamente acepta: Letras, Letras Acentuadas, Numeros & Carácteres Especiales.
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="idioma_contenido" class="label__formulario">Idioma del contenido</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="idioma_contenido"
                        name="IdiomaContenido" placeholder="Idioma del Contenido" required>
                    <p>Este campo debe tener una longitud entre 8 y 24 caracacteres.
                        <strong>
                            Este campo únicamente acepta: Letras, Letras Acentuadas & Carácteres Especiales.
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
            </fieldset>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <fieldset>
                <legend>Datos de Resguardo</legend>
                <div class="form-group">
                    <label for="resguardo_Actual" class="label__formulario">Ubicación de Resguardo Actual</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="resguardo_actual"
                        name="LugarResguardo" placeholder="Ubicación de Resguardo Actual" required>
                    <p>Este campo debe tener una longitud entre 12 y 36 carácteres.
                        <strong>
                            Este campo únicamente acepta: Letras, Letras Acentuadas, Numeros & Carácteres Especiales.
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="resguardo_desde" class="label__formulario">Resguardado desde:</label>
                    <input type="date" inputmode="date" class="form-control inputs" id="resguardo_desde"
                        name="ResguardoDesde" required>
                    <p>Este campo debe tener una longitud de 10 caracacteres.
                        <strong>
                            Este campo unicamente acepta el formato: dd/mm/aaaa
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="departamento_actual" class="label__formulario">Área de Resguardo:</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="departamento_actual"
                        name="AreaResguardo" placeholder="Departamento Actual" required>
                    <p>Este campo debe tener una longitud de 10 caracacteres.
                        <strong>
                            Este campo unicamente acepta el formato: dd/mm/aaaa
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="calidad_archivo" class="label__formulario">Calidad del Archivo:</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="calidad_archivo"
                        name="CalidadArchivo" placeholder="Calidad del Archivo" required>
                    <p>Este campo debe tener una longitud de 10 caracacteres.
                        <strong>
                            Este campo unicamente acepta el formato: dd/mm/aaaa
                        </strong>
                    </p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                </div>
                <div class="form-group">
                    <label for="multiples_archivos">Seleccione sus Archivos</label>
                    <input type="file" class="btn btn-outline-* btn-lg" name="MultiplesArchivos" id="multiples_archivos"
                        accept="video/*, image/*, audio/*, .PDF, .DOC, .DOCX, .XLSX, .pdf, .doc, .docx, .xlsx" required
                        multiple>
                    <p>El nombre de este archivo no puede tener más de 48 letras/numeros/carácteres especiales.</p>
                    <div class="invalid-feedback">
                        Este campo NO puede estar vacio. Favor de verificarlo.
                    </div>
                    <div class="archivoSeleccionado"></div><br>
                    <canvas id="pdfViewer"></canvas>
                </div>
            </fieldset>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <fieldset>
                <legend>Datos encargado de registro</legend>
                <div class="form-group">
                    <label for="encargado_registro" class="label__formulario">Encargado de Registro</label>
                    <input type="text" inputmode="text" class="form-control inputs" id="encargado_registro"
                        name="EncargadoRegistroArchivos"
                        placeholder="El encargado de registro se recupera desde la sesión." disabled>
                </div>
                <div class="form-group">
                    <label for="fecha_registro" class="label__formulario">Fecha de Registro</label>
                    <input type="text" inputmode="date" class="form-control text-center" id="fecha_registro"
                        name="FechaRegistroArchivo" placeholder="El encargado de registro se recupera desde la sesión."
                        disabled>
                </div>
            </fieldset>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-2 mb-2">
            <button type="reset" class="limpiar__usuarios btn btn-outline-* btn-lg pt-2 pb-2" id="limpiar__documentos">
                Limpiar
                <i class='bx bx-eraser'></i>
            </button>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-2 mb-2">
            <button type="submit" class="registrar__usuarios btn btn-outline-* btn-lg pt-2 pb-2"
                id="registrar__archivos">
                Registrar
                <i class='bx bx-pencil'></i>
            </button>
        </div>

    </div>
</form>

<script src="/VIEW/JS/Validaciones.js" type="module"></script>