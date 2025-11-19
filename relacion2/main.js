import { Validator } from "../BootstrapTemplates/src/Validator.js";
import { ValidatorStyle } from "../BootstrapTemplates/src/ValidatorStyle.js";
window.addEventListener("DOMContentLoaded", () => {
  window.act13 = function () {
    const form = document.getElementById("act13");
    const nombreId = "nombre";
    const emailId = "email";
    const notasIds = ["inicial", "primera", "segunda", "tercera"];

    let isValid = true;

    // Validación nombre
    if (!Validator.validateName(nombreId)) {
      ValidatorStyle.styleInput(false, nombreId);
      isValid = false;
    } else {
      ValidatorStyle.styleInput(true, nombreId);
    }

    // Validación email
    if (!Validator.validateEmail(emailId)) {
      ValidatorStyle.styleInput(false, emailId);
      isValid = false;
    } else {
      ValidatorStyle.styleInput(true, emailId);
    }

    // Validación notas
    notasIds.forEach((id) => {
      const input = document.getElementById(id);
      if (!(Validator.validateNaturalNumber(id) && Number(input.value) <= 10)) {
        ValidatorStyle.styleInput(false, id);
        isValid = false;
      } else {
        ValidatorStyle.styleInput(true, id);
      }
    });

    if (isValid) form.submit();
  };
  window.act14 = function () {
    const form = document.getElementById("act14");
    let isValid = true;
    if (
      !Validator.validateNaturalNumber("inicial") &&
      Number(document.getElementById("inicial").value) <= 10
    ) {
      ValidatorStyle.styleInput(false, "inicial");
      isValid = false;
    } else {
      ValidatorStyle.styleInput(true, "inicial");
      isValid = true;
    }
    if (isValid) form.submit();
  };
  window.act15 = function () {
    const form = document.getElementById("act15");
    let isValid = true;
    if (!Validator.validateNaturalNumber("num")) {
      ValidatorStyle.styleInput(false, "num");
      isValid = false;
    } else {
      ValidatorStyle.styleInput(true, "num");
      isValid = true;
    }
    if (isValid) form.submit();
  };
  window.act16 = function () {
    const form = document.getElementById("act16");
    let isValid = true;
    if (!Validator.validateNaturalNumber("num")) {
      ValidatorStyle.styleInput(false, "num");
      isValid = false;
    } else if (
      !(
        document.getElementById("primos").checked ||
        document.getElementById("divisores").checked
      )
    ) {
      ValidatorStyle.styleInput(false, "primos");
      isValid = false;
    } else {
      ValidatorStyle.styleInput(true, "num");
      ValidatorStyle.styleInput(true, "primos");
      ValidatorStyle.styleInput(true, "divisores");
      isValid = true;
    }
    if (isValid) form.submit();
  };
  window.act17 = function () {
    const form = document.getElementById("act17");
    let isValid = true;
    if (!Validator.validateNaturalNumber("num1")) {
      ValidatorStyle.styleInput(false, "num1");
      isValid = false;
    } else if (
      !(
        Validator.validateNaturalNumber("num2") &&
        Number(document.getElementById("num2").value) > 0
      )
    ) {
      ValidatorStyle.styleInput(false, "num2");
      isValid = false;
    } else if (
      !(
        document.getElementById("divide").checked ||
        document.getElementById("mcd").checked
      )
    ) {
      ValidatorStyle.styleInput(false, "euclides");
      isValid = false;
    } else {
      ValidatorStyle.styleInput(true, "num1");
      ValidatorStyle.styleInput(true, "num2");
      ValidatorStyle.styleInput(true, "euclides");
      isValid = true;
    }
    if (isValid) form.submit();
  };
  window.act18 = function () {
    const form = document.getElementById("act18");
    let isValid = true;
    if (!Validator.validateInteger("num")) {
      ValidatorStyle.styleInput(false, "num");
      isValid = false;
    } else {
      ValidatorStyle.styleInput(true, "num");
      isValid = true;
    }
    if (isValid) form.submit();
  };
});
