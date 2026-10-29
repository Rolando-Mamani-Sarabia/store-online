
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

/* funsion que muestra alertas de formulario en html */
const formularioPedido = document.querySelector("#form-contacto");
const avisoPedido = document.querySelector("#aviso-contacto");

function revisarPedido(event){

    event.preventDefault();
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;

    if(nombre === ""){
        avisoPedido.textContent = "Falta ingresar tu nombre."
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }else if (correo === ""){
        avisoPedido.textContent = "Ingrese su correo"
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }else if(correo.includes("@") === false){
        avisoPedido.textContent = "Ese correo no parece correo: le falta el @."
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }else{
        avisoPedido.textContent = "Pedido recibido. Estaremos en contacto lo mas pronto posible."
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");
    }
}

formularioPedido.addEventListener("submit", revisarPedido);
