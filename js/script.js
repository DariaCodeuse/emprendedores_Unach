/** menu **/
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

/* CUENTA */
// Opcional: Cierra el menú cuando se hace clic en cualquier parte fuera de él
document.addEventListener("click", function (e) {
    const userMenu = document.getElementById("user-menu");
    if (e.target.closest("#user-menu") !== userMenu) {
        userMenu.querySelector(".user-menu-content").style.display = "none";
    }
});

// Opcional: Cierra el menú al hacer clic en cualquier enlace dentro de él
document.getElementById("user-menu").addEventListener("click", function (e) {
    e.stopPropagation();
    this.querySelector(".user-menu-content").style.display = "block";
});