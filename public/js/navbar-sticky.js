// Navbar stick on scroll ++ styles

var navbar = document.querySelector("[navbar-main]");

window.onscroll = function () {
  let blur = navbar.getAttribute("navbar-scroll");
  if (blur == "true") stickyNav();
};

function stickyNav() {
  if (window.scrollY >= 5) {
    navbar.classList.add("sticky", "top-[1%]",  "bg-[hsla(0,0%,100%,0.8)]", "z-110");
  } else {
    navbar.classList.remove("sticky", "top-[1%]",  "bg-[hsla(0,0%,100%,0.8)]", "z-110");
  }
}
