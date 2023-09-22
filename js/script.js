// (function () {
//   const hamburger = document.querySelector(".navigation__hamburger");
//   const navLinksWrapper = document.querySelector(".navigation__links");
//   const navLinks = document.querySelectorAll(".navigation__link--dropdown");

//   let navIsOpen = false;

//   // need the height for the link container as we are using a transition
//   function navLinksHeight(elements) {
//     let height = 0;
//     navLinks.forEach((link) => (height += link.offsetHeight));
//     return height;
//   }

//   function classToggle(...classList) {
//     classList.map((el) => el.classList.toggle("active"));
//   }

//   hamburger.addEventListener("click", () => {
//     navIsOpen = navIsOpen ? false : true;
//     navLinksWrapper.style.height = navIsOpen ? navLinksHeight(navLinks) + "px" : 0;
//     classToggle(hamburger);
//   });

//   window.addEventListener("resize", () => {
//     if (innerWidth >= 768) {
//       if (navLinksWrapper.style.height) {
//         navLinksWrapper.style.height = null;
//       }
//       if (navIsOpen) {
//         classToggle(hamburger);
//         navIsOpen = false;
//       }
//     }
//   });
// })();

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
