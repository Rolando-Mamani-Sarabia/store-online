/* :) boton enviar mensaje esperemos que funsiones */
const boton = document.querySelector("#btn-mensaje");

function mostrarMensaje() {
    const parrafo = document.querySelector("#mensaje-confirmacion");

    parrafo.textContent = "Pedido confirmado - te atiende Rolando Mamani Sarabia";
    parrafo.classList.remove("oculto");
}

boton.addEventListener("click", mostrarMensaje);