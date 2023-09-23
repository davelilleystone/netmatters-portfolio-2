const hb = document.querySelector(".hamburger");
const sb = document.querySelector(".sidebar");
const breakpoint = 768;

hb.addEventListener("click", () => {
  if (innerWidth <= breakpoint) {
    sb.classList.toggle("sidebar--ms-open");
    hb.classList.toggle("hamburger--ms-open");
  }
});

window.addEventListener("resize", () => {
  if (innerWidth >= breakpoint && sb.classList.contains("sidebar--ms-open")) {
    sb.classList.remove("sidebar--ms-open");
    hb.classList.remove("hamburger--ms-open");
  }
});
