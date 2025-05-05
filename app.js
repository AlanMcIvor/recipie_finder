const menu = document.querySelector(".navbar-mobile");
const openBtn = document.querySelector(".menu-open");
const closeBtn = document.querySelector(".menu-close");

function toggleMenu() {
  const isOpen = menu.classList.toggle("show-hide");
  openBtn.style.display = isOpen ? "none" : "inline-block";
  closeBtn.style.display = isOpen ? "inline-block" : "none";
}

openBtn.addEventListener("click", toggleMenu);
closeBtn.addEventListener("click", toggleMenu);
