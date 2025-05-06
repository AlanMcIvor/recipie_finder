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

window.addEventListener("scroll", function () {
  const elements = document.querySelectorAll(".slide-up");
  const windowHeight = window.innerHeight;

  elements.forEach((element) => {
    const elementTop = element.getBoundingClientRect().top;
    if (elementTop < windowHeight - 100) {
      element.classList.add("visible");
    }
  });
});
