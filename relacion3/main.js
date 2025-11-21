// main.js
import { Validator } from "../BootstrapTemplates/src/Validator.js";
import { ValidatorStyle } from "../BootstrapTemplates/src/ValidatorStyle.js";

console.log("Main cargado");

// Validación simple de número natural para el act1 (si existe)
window.acti1 = function () {
  const form = document.getElementById("act1");
  if (!form) return;
  const isValid = Validator.validateNaturalNumber("num");
  ValidatorStyle.styleInput(isValid, "num");
  if (isValid) form.submit();
};

// Objeto con funciones del formulario act5
const Main = {
  act5() {
    const form = document.getElementById("act5");
    if (!form) return;
    let isValid = true;

    const dniChecked = document.getElementById("dnI").checked;
    const nieChecked = document.getElementById("niE").checked;

    // Validar notas
    ["inicial", "primera", "segunda", "tercera"].forEach((id) => {
      const valid = Validator.validateNaturalNumber(id);
      ValidatorStyle.styleInput(valid, id);
      if (!valid) isValid = false;
    });

    // Validar nombre y email
    if (!Validator.validateName("nombre")) {
      ValidatorStyle.styleInput(false, "nombre");
      isValid = false;
    } else {
      ValidatorStyle.styleInput(true, "nombre");
    }
    if (!Validator.validateEmail("email")) {
      ValidatorStyle.styleInput(false, "email");
      isValid = false;
    } else {
      ValidatorStyle.styleInput(true, "email");
    }

    // Validar documentos
    if (dniChecked) {
      const valid = Validator.validateDni("dni");
      ValidatorStyle.styleInput(valid, "dni");
      if (!valid) isValid = false;
    } else if (nieChecked) {
      const validNIE = Validator.validateNIE("nie");
      const validTIE = Validator.validateTIE("tie");
      ValidatorStyle.styleInput(validNIE, "nie");
      ValidatorStyle.styleInput(validTIE, "tie");
      if (!validNIE || !validTIE) isValid = false;
    }

    if (isValid) form.submit();
  },

  showForms() {
    const dniChecked = document.getElementById("dnI").checked;
    const nieChecked = document.getElementById("niE").checked;

    const dniContainer = document.getElementById("dniContainer");
    const nieContainer = document.getElementById("nieContainer");

    dniContainer.hidden = !dniChecked;
    nieContainer.hidden = !nieChecked;
  },
};
// Exponer en window por si quieres inspeccionar desde consola
window.Main = Main;

// Esperar a que el DOM cargue
document.addEventListener("DOMContentLoaded", () => {
  // Asignar listeners a radios y botón
  document.getElementById("dnI").addEventListener("change", Main.showForms);
  document.getElementById("niE").addEventListener("change", Main.showForms);

  const btn = document.querySelector('#act5 button[type="button"]');
  if (btn) btn.addEventListener("click", Main.act5);
});
