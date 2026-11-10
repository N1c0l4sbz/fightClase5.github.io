window.addEventListener("DOMContentLoaded", () => {
    alert("¡Bienvenido a Impact Fight! Equipamiento oficial de Taekwondo ITF.");
    actualizarReloj();
});

function actualizarReloj() {
    const contenedorReloj = document.getElementById("reloj-tiempo-real");
    if (contenedorReloj) {
        const ahora = new Date();
        const opcionesFecha = { year: 'numeric', month: 'long', day: 'numeric' };
        const fechaFormateada = ahora.toLocaleDateString('es-ES', opcionesFecha);
        const horaFormateada = ahora.toLocaleTimeString('es-ES');
        
        contenedorReloj.innerHTML = `📅 ${fechaFormateada} | ⏰ ${horaFormateada}`;
    }
}
setInterval(actualizarReloj, 1000);

function alternarTema() {
    document.body.classList.toggle("modo-claro");
}

function toggleAcordeon(idSeccion) {
    const seccion = document.getElementById(idSeccion);
    if (seccion) {
        if (seccion.style.display === "none" || seccion.style.display === "") {
            seccion.style.display = "block";
        } else {
            seccion.style.display = "none";
        }
    }
}

const listaImagenes = [
    "img/protectores de pie azules.webp",
    "img/protectores de pie rojos.webp",
    "img/protectores de mano.webp",
    "img/protectores de mano invictus.webp"
];

let indiceActual = 0;

function cambiarImagenCarrusel(direccion) {
    indiceActual += direccion;

    if (indiceActual < 0) {
        indiceActual = listaImagenes.length - 1;
    } else if (indiceActual >= listaImagenes.length) {
        indiceActual = 0;
    }

    const imgElemento = document.getElementById("imagen-carrusel");
    if (imgElemento) {
        imgElemento.src = listaImagenes[indiceActual];
    }
}

function ampliarImagen(src) {
    const modal = document.getElementById("modal-imagen");
    const imgAmpliada = document.getElementById("img-ampliada");
    if (modal && imgAmpliada) {
        imgAmpliada.src = src;
        modal.style.display = "flex";
    }
}

function cerrarModal() {
    const modal = document.getElementById("modal-imagen");
    if (modal) {
        modal.style.display = "none";
    }
}

function procesarFormulario(event) {
    event.preventDefault();

    const nombreInput = document.getElementById("nombre");
    const emailInput = document.getElementById("email");
    const errorNombre = document.getElementById("error-nombre");
    const errorEmail = document.getElementById("error-email");
    const resumenContenedor = document.getElementById("resumen-formulario");

    const nombre = nombreInput ? nombreInput.value.trim() : "";
    const email = emailInput ? emailInput.value.trim() : "";

    let esValido = true;

    if (errorNombre) errorNombre.innerText = "";
    if (errorEmail) errorEmail.innerText = "";

    if (nombre === "") {
        if (errorNombre) errorNombre.innerText = "⚠️ Por favor, ingresa tu nombre.";
        esValido = false;
    }

    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
        if (errorEmail) errorEmail.innerText = "⚠️ Por favor, ingresa tu correo.";
        esValido = false;
    } else if (!regexEmail.test(email)) {
        if (errorEmail) errorEmail.innerText = "⚠️ Ingrese un correo válido (ej: usuario@gmail.com).";
        esValido = false;
    }

    if (esValido && resumenContenedor) {
        resumenContenedor.style.display = "block";
        resumenContenedor.innerHTML = `
            <h3 style="color: #a5d6a7; margin-bottom: 8px;">📋 Resumen de la Consulta:</h3>
            <p><strong>Nombre:</strong> ${nombre}</p>
            <p><strong>Correo Electrónico:</strong> ${email}</p>
            <p style="margin-top: 8px;">¡Formulario verificado con éxito!</p>
        `;
    }
}