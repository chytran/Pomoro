const navMenu = document.getElementById("nav-menu"); // menu
const navToggle = document.getElementById("nav-toggle"); // toggle
const navClose = document.getElementById("nav-close");
const navToggleBtn = document.getElementById("nav-toggle-button");
// Show menu

navToggle.addEventListener("click", () => {
    navMenu.classList.add('show-menu');
    navToggleBtn.classList.add('release');
});


if(navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu');
        navToggleBtn.classList.remove('release');
    })
}

[]