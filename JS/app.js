'use strict';
console.log("\u2705 Javascript cargado");

document.addEventListener('DOMContentLoaded', function() {
    // Obtener referencia al botón "Iniciar sesión"
    var iniciarSesionBtn = document.querySelector('.header__btn.header__btn--join');

    // Obtener referencia al SVG
    var menuIcon = document.querySelector('.header__menu');

    // Agregar un event listener para el clic en el SVG
    menuIcon.addEventListener('click', function() {
        // Mostrar el botón "Iniciar sesión"
        iniciarSesionBtn.style.display = 'block';
    });
});
