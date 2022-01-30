"use strict";
exports.__esModule = true;
var navMenu = document.getElementById("nav-menu"); // menu
var navToggle = document.getElementById("nav-toggle"); // toggle
var navClose = document.getElementById("nav-close");
var navToggleBtn = document.getElementById("nav-toggle-button");
// Show menu
navToggle.addEventListener("click", function () {
    navMenu.classList.add('show-menu');
    navToggleBtn.classList.add('release');
});
if (navClose) {
    navClose.addEventListener('click', function () {
        navMenu.classList.remove('show-menu');
        navToggleBtn.classList.remove('release');
    });
}
