/**
 * @param {constante} (I.d formulario usuarios)
 * @param {constante} (I.d. formulario archivos)
 */

export const usuarios = document.querySelector('#usuarios');
export const archivos = document.querySelector('#documentos__imagenes');

/**
 * @param {constantes} (inputsUsuarios && inputsDocumentos && inputsRecuperarContraseña && inputsLogin)
 * @param {input´s} (Recuperan los distintos tipos de inputs de los distintos formularios, login, recuperar contraseña.)
 */

export const inputsUsuarios = document.querySelectorAll("#usuarios input[type=text], input[type=password], textarea");
export const inputsDocumentos = document.querySelectorAll("#documentos__imagenes input[type=text], input[type=password], textarea");
export const inputsRecuperarContraseña = document.querySelectorAll("#recuperarContrasena input[type=text], input[type=password]");
export const inputsLogin = document.querySelectorAll("#login input[type=text], input[type=password]");

/**
 * @param {constantes} (contrasena && repetir__contrasena)
 * @param {input´s} (Recuperar los input´s correspondientes.)
 */

export const contraseña = document.querySelector('#contrasena__1');
export const repetir__contraseña = document.querySelector('#contrasena__2');

/**
 * @param {constantes} (limpiarUsuarios && limpiarDocumentos)
 * @param {botones} (Limpian input´s y recarga la pagina donde se realize click)
 */

export const limpiarUsuarios = document.querySelector('#limpiar__usuarios');
export const limpiarDocumentos = document.querySelector('#limpiar__documentos');

/**
 * @param {objeto} (inputs__Regexs)
 * @param {propiedades} (Nombres hasta NuevaContrasena)
 * @param {valores|Regexs} (/^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{8,24}$/ hasta /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/)
 */

export let inputs__Regexs = {
    Nombres: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{8,24}$/,
    Apellido_Paterno: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{8,24}$/,
    Apellido_Materno: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{8,24}$/,
    Correo_Personal: /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])$/,
    Telefono_Fijo: /^\d{10,20}$/,
    Telefono_Movil: /^\d{10,20}$/,
    Direccion: /^[a-zA-Z0-9À-ÿ\u00f1\u00d1\_\.\,\#\_\s\-]{16,32}$/,
    Curp: /^[A-Z0-9]{18}$/,
    Correo_Laboral: /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])$/,
    Identificador_Empleado: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/,
    Area_Trabajo: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{8,32}$/,
    FotoEmpleado: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/,
    Usuario: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/,
    Contrasena_1: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/,
    Contrasena_2: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/,
    NombreArchivo: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{8,24}$/,
    AutorArchivo: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\s]{8,24}$/,
    FechaCreacion: /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/,
    LugarCreacion: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/,
    Descripcion: /^[a-zA-ZÀ-ÿ0-9\u00f1\u00d1\_\.\,\#\s\-]{16,60}$/,
    IdiomaContenido: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\_\.\,\#\s\-]{8,24}$/,
    LugarResguardo: /^[a-zA-ZÀ-ÿ\u00f1\u00d1\_\.\,\#\s\-]{12,36}$/,
    ResguardoDesde: /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/,
    AreaResguardo: /^[a-zA-ZÀ-ÿ0-9\u00f1\u00d1\_\.\,\#\s\-]{12,36}$/,
    CalidadArchivo: /^[a-zA-ZÀ-ÿ0-9\u00f1\u00d1\_\.\,\#\s\-]{12,36}$/,
    MultiplesArchivos: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/,
    EncargadoRegistroArchivos: /^[a-zA-ZÀ-ÿ0-9\u00f1\u00d1\_\.\,\#\s\-]{12,36}$/,
    FechaRegistroArchivo: /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/,
    LoginUsuario: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/,
    LoginContrasena: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/,
    UsuarioRecuperar: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/,
    AntiguaContrasena: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/,
    NuevaContrasena: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/
};

/**
 * @param {constante} (boton__Volver__Arriba)
 */

export const boton__Volver__Arriba = document.querySelector('.boton__volver__arriba');

/**
 * @param {constantes} (tab´s & tabButton & contents)
 */
export const tabs = document.querySelector(".wrapper");
export const tabButton = document.querySelectorAll(".tab-button");
export const contents = document.querySelectorAll(".content");