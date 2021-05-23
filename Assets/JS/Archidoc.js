! function () {
    "use strict";
    document.addEventListener("DOMContentLoaded", function () {

        document.addEventListener("contextmenu", (e) => {
            e.preventDefault();
            const notificacionSinInternet = () => {
                const notification = new Notification("Mensaje del departamento TIC´S", {
                    body: "El click derecho se encuentra desactivado. \n" + "Si esto le resulta molesto, favor de llamar al departamento de TIC´s.",
                    icon: "/Assets/ICO/logo_AGNicon.ico"
                });
                notification.onclick = (e) => {
                    window.location.href = "mailto:lgonzalezp@agn.gob.mx"
                }
            }
            if (Notification.permission === "granted") {
                notificacionSinInternet();
            } else if (Notification.permission !== "denied") {
                Notification.requestPermission().then(permission => {
                    if (permission === "granted") {
                        notificacionSinInternet();
                        console.log(permission);
                    }
                });
            }

        }, false);

        window.addEventListener("offline", () => {
            const notificacionSinInternet = () => {
                const notification = new Notification("Mensaje del departamento TIC´S", {
                    body: "Al parecer el servicio de internet se encuentra caido, por lo que podría experimentar un uso errorneo del sistema. \n" + "Favor de esperar a que el servicio sea reestablecido ó llame al departamento de TIC´s para que puedan auxiliarlo.\n" + "Por su comprensión. gracias.",
                    icon: "/Assets/ICO/logo_AGNicon.ico"
                });
                notification.onclick = (e) => {
                    window.location.href = "mailto:lgonzalezp@agn.gob.mx"
                }
                setTimeout(() => {
                    notification.close();
                }, 5 * 1000);
            }
            if (Notification.permission === "granted") {
                notificacionSinInternet();
            } else if (Notification.permission !== "denied") {
                Notification.requestPermission().then(permission => {
                    if (permission === "granted") {
                        notificacionSinInternet();
                        console.log(permission);
                    }
                });
            }
        });


    });
}();