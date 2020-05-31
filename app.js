const moo = document.querySelector(".moo");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

moo.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  links.forEach(link => {
    link.classList.toggle("fade");
  });
});

