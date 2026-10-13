
/* Accion del boton dia/noche */
const cuerpo = document.querySelector("body");
const botonModo = document.querySelector("#btn-tema");

let esDeDia = true;

function alternarModo(){
    cuerpo.classList.toggle("noche");

    esDeDia = !esDeDia;

    if(esDeDia){
        botonModo.textContent = "☀️ Modo Dia";
    }else{
        botonModo.textContent = "🌙 Modo Noche";
    }
}

botonModo.addEventListener("click", alternarModo);


/* Accion para el menu amburguessa */

const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

function alternarMenu(){
    menu.classList.toggle("abierto");
}

botonMenu.addEventListener("click", alternarMenu)

/* Realizando pruebas de acceso a modificacion (Cuenta Secundaria --> RolandoMSDev) */