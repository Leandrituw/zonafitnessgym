let menuVisible = false;

// Función que oculta o muestra el menú
function mostrarOcultarMenu() {
    const nav = document.getElementById("nav");

    if (menuVisible) {
        nav.classList.remove("responsive");
        menuVisible = false;
    } else {
        nav.classList.add("responsive");
        menuVisible = true;
    }
}

// Función para ocultar el menú al seleccionar una opción
function seleccionar(event) {
    event.preventDefault(); // Evita el comportamiento predeterminado del enlace

    const targetId = event.target.getAttribute("href"); // Obtiene el atributo href del enlace clicado
    const targetSection = document.querySelector(targetId); // Encuentra la sección correspondiente

    if (targetSection) {
        window.scrollTo({
            top: targetSection.offsetTop, // Desplaza hasta la parte superior de la sección
            behavior: "smooth" // Hace que el desplazamiento sea suave
        });
    }

    // Oculta el menú después de seleccionar una opción
    const nav = document.getElementById("nav");
    nav.classList.remove("responsive");
    menuVisible = false;
}

// Asocia la función `seleccionar` a todos los enlaces del menú
document.querySelectorAll('#nav a').forEach(enlace => {
    enlace.addEventListener('click', seleccionar);
});

// LIGHTBOX para las imágenes de la galería
const imagenes = document.querySelectorAll('.img-galeria'); // Selecciona todas las imágenes de la galería
const imagenLight = document.querySelector('.agregar-imagen'); // Elemento donde se muestra la imagen en el lightbox
const contenedorLight = document.querySelector('.imagen-light'); // Contenedor del lightbox
const closeLight = document.querySelector('.close'); // Botón para cerrar el lightbox

// Event listeners para cada imagen de la galería
imagenes.forEach(imagen => {
    imagen.addEventListener('click', () => {
        aparecerImagen(imagen.getAttribute('src')); // Muestra la imagen clickeada en el lightbox
    });
});

// Event listener para cerrar el lightbox al hacer clic fuera de la imagen
contenedorLight.addEventListener('click', (e) => {
    if (e.target !== imagenLight) { // Si se hace clic fuera de la imagen
        contenedorLight.classList.toggle('show'); // Cierra el lightbox
        imagenLight.classList.toggle('showImage');
    }
});

// Función para mostrar la imagen en el lightbox
const aparecerImagen = (imagen) => {
    imagenLight.src = imagen; // Establece la imagen que se mostrará en el lightbox
    contenedorLight.classList.toggle('show'); // Muestra el lightbox
    imagenLight.classList.toggle('showImage');
};