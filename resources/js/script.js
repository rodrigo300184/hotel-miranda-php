/*----------Burger Menu----------*/
const menu = document.getElementById("header_menu");
const navbar = document.getElementById("navbar");

menu.addEventListener("click", dropdown_menu);

function dropdown_menu() {
  menu.classList.toggle("header_menu--active");
  navbar.classList.toggle("navbar--active");
}

window.addEventListener("resize", dropdown_menu_adjust);

function dropdown_menu_adjust() {
  if (window.innerWidth < 1000) {
    menu.classList.remove("header_menu--active");
    navbar.classList.remove("navbar--active");
  } 
}

if (window.innerWidth < 1000) {
  document
    .getElementById("navbar")
    .addEventListener("click", () => setTimeout(dropdown_menu_adjust, 300));
}


