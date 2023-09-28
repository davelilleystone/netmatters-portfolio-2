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
form.noValidate = true;
const emailRegex = new RegExp(
  /^("(?:[!#-\[\]-\u{10FFFF}]|\\[\t -\u{10FFFF}])*"|[!#-'*+\-/-9=?A-Z\^-\u{10FFFF}](?:\.?[!#-'*+\-/-9=?A-Z\^-\u{10FFFF}])*)@([!#-'*+\-/-9=?A-Z\^-\u{10FFFF}](?:\.?[!#-'*+\-/-9=?A-Z\^-\u{10FFFF}])*|\[[!-Z\^-\u{10FFFF}]*\])$/u
);

// class names for valid / invalid inputs

const validClassName = "form__input--valid";
const invalidClassName = "form__input--invalid";
const errorMessageClassName = "form__err-message--visible";

// add / remove classes

const removeClass = (el, className) => el.classList.remove(className);
const addClass = (el, className) => el.classList.add(className);

// check if name and message length are valid

const checkInputIsValid = (el) => {
  if (el.name === "name") {
    return el.value.trim().length > 0 ? true : false;
  } else if (el.name === "message") {
    return el.value.trim().length >= 25 ? true : false;
  }
};

// check if email input is valid using regex

const checkEmailIsValid = (el) => emailRegex.test(el.value);

// add 'valid' class and remove 'invalid' class

const inputIsValid = (el) => {
  removeClass(el, invalidClassName);
  addClass(el, validClassName);
  removeClass(el.nextElementSibling, errorMessageClassName);
};

// add 'invalid' class and add 'error message' class to show error message to user
const inputIsNotValid = (el) => {
  addClass(el, invalidClassName);
  addClass(el.nextElementSibling, errorMessageClassName);
};

// called on

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

// check all fields are valid, only submit when they are.

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
  }
});

// check if input is valid time element value changes

form.addEventListener("input", (evt) => {
  let el = evt.target;
  checkInput(el);
});

/*****************************************************************/
