import {
    tabs,
    tabButton,
    contents
} from '/VIEW/JS/SELECTORES/Selectores.js'

! function () {
    "use strict";
    document.addEventListener("DOMContentLoaded", function () {

        tabs.onclick = e => {
            const id = e.target.dataset.id;
            if (id) {
                tabButton.forEach(btn => {
                    btn.classList.remove("active");
                });
                e.target.classList.add("active");
                contents.forEach(content => {
                    content.classList.remove("active");
                });
                const element = document.getElementById(id);
                element.classList.add("active");
            }
        }

    });
}();