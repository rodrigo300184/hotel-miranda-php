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
    menu.classList.remove("header_menu--disabled");
  } else {
    menu.classList.add("header_menu--disabled");
  }
}

if (window.innerWidth < 1000) {
  menu.classList.remove("header_menu--disabled");
  document
    .getElementById("navbar")
    .addEventListener("click", () => setTimeout(dropdown_menu_adjust, 300));
} else {
  menu.classList.add("header_menu--disabled");
}

/*----------Desktop Menu----------*/ 

const header = document.getElementById("header");

window.addEventListener("scroll", () => {
  const currentScrollPos = window.scrollY;
  if (currentScrollPos >= 160 && window.innerWidth > 999) {
    header.classList.add("header--hidden");
  } else {
    header.classList.remove("header--hidden");
  }
});

window.addEventListener("mousemove", (event) => {
  const currentScrollPos = window.scrollY;
  if (event.clientY < 35 && currentScrollPos > 150 && window.innerWidth > 999) {
    header.classList.add("header--float");
  } else if (event.clientY > 210 && window.innerWidth > 999) {
    header.classList.remove("header--float");
  }
});

/*----------Active Navbar links----------*/ 

document.addEventListener("DOMContentLoaded", function() {
 
  const path = window.location.pathname;
  console.log(path);
  const links = document.querySelectorAll(".navbar_a");
  console.log(links);
  links.forEach(link => {
    if (link.getAttribute("href") === path) {
      link.classList.add("navbar_a--active");
    }
  });
});
