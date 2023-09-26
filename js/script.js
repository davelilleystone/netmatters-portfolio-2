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

/*****************************************************************/

// form validation

const form = document.querySelector("form");
const emailRegex = new RegExp(
  /^("(?:[!#-\[\]-\u{10FFFF}]|\\[\t -\u{10FFFF}])*"|[!#-'*+\-/-9=?A-Z\^-\u{10FFFF}](?:\.?[!#-'*+\-/-9=?A-Z\^-\u{10FFFF}])*)@([!#-'*+\-/-9=?A-Z\^-\u{10FFFF}](?:\.?[!#-'*+\-/-9=?A-Z\^-\u{10FFFF}])*|\[[!-Z\^-\u{10FFFF}]*\])$/u
);
const validClassName = "form__input--valid";
const invalidClassName = "form__input--invalid";
const errorMessageClassName = "form__err-message--visible";

// functions

const removeClass = (el, className) => el.classList.remove(className);
const addClass = (el, className) => el.classList.add(className);
const checkInputIsValid = (el) => {
  if (el.name === "name") {
    return el.value.trim().length > 0 ? true : false;
  } else if (el.name === "message") {
    return el.value.trim().length >= 25 ? true : false;
  }
};
const checkEmailIsValid = (el) => emailRegex.test(el.value);
const inputIsValid = (el) => {
  removeClass(el, invalidClassName);
  addClass(el, validClassName);
  removeClass(el.nextElementSibling, errorMessageClassName);
};
const inputIsNotValid = (el) => {
  addClass(el, invalidClassName);
  addClass(el.nextElementSibling, errorMessageClassName);
};

const checkInput = (el) => {
  console.log(el.id);

  let inputState = true;
  if (el.id === "name" || el.id === "message") {
    if (!checkInputIsValid(el)) {
      inputIsNotValid(el);
      inputState = false;
    } else {
      inputIsValid(el);
    }
  } else if (el.id === "email") {
    if (!checkEmailIsValid(el)) {
      inputIsNotValid(el);
      inputState = false;
    } else {
      inputIsValid(el);
    }
  }
  return inputState;
};

// event listeners

form.addEventListener("submit", (evt) => {
  evt.preventDefault();

  let formValid = true;
  const inputs = document.querySelectorAll(".form__input");

  inputs.forEach((el) => {
    if (!checkInput(el)) {
      addClass(el.nextElementSibling, errorMessageClassName);
      formValid = false;
    }
  });

  if (formValid) {
    form.submit();
    alert("Form Submitted");
  }
});

form.addEventListener("input", (evt) => {
  let el = evt.target;
  checkInput(el);
});

/*****************************************************************/
