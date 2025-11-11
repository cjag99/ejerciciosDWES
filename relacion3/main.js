import { Validator } from "../BootstrapTemplates/src/Validator.js";
import { ValidatorStyle } from "../BootstrapTemplates/src/ValidatorStyle.js";

/*
  main.js
  - Contiene funciones de interacción para los formularios de la relación 3
  - `formLowerUpper` / `formLowerOrUpper` controlan la UI (mostrar/ocultar opciones)
  - `acti1` valida en cliente que el número sea un natural antes de enviar el formulario
*/
function formLowerUpper() {
  let checkbox = document.getElementById("checkbox1");
  let mayusMinus = document.getElementById("mayusMinus");
  checkbox.hidden = true;
  mayusMinus.hidden = false;
  document.getElementById("tipo").value = "form1";
}
function formLowerOrUpper() {
  let checkbox = document.getElementById("checkbox1");
  let mayusMinus = document.getElementById("mayusMinus");
  checkbox.hidden = false;
  if (!mayusMinus.hidden) {
    mayusMinus.hidden = true;
  }
  document.getElementById("tipo").value = "form2";
}

window.acti1 = function () {
  const form = document.getElementById("act1");
  const isValid = Validator.validateNaturalNumber("num");
  ValidatorStyle.styleInput(isValid, "num");

  if (isValid) {
    form.submit(); 
  }
};
