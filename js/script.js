const hb = document.querySelector(".hamburger");
const sb = document.querySelector(".sidebar");
const cc = document.querySelector(".content-container");
const breakpoint = 768;

hb.addEventListener("click", () => {
  if (innerWidth <= breakpoint) {
    sb.classList.toggle("sidebar--ms-open");
    hb.classList.toggle("hamburger--ms-open");
  }
  if (innerWidth >= breakpoint) {
    sb.classList.toggle("sidebar--hide");
    hb.classList.toggle("hamburger--open");
    cc.classList.toggle("content-container--hide-margin");
  }
});

window.addEventListener("resize", () => {
  if (innerWidth >= breakpoint && sb.classList.contains("sidebar--ms-open")) {
    sb.classList.remove("sidebar--ms-open");
    hb.classList.remove("hamburger--ms-open");
  }
  if (innerWidth < breakpoint && sb.classList.contains("sidebar--hide")) {
    sb.classList.remove("sidebar--hide");
    hb.classList.remove("hamburger--open");
    cc.classList.remove("content-container--hide-margin");
  }
});
