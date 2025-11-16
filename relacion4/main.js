function showHiddenForm(id) {
  let form = document.getElementById(id);
  form.hidden = false;
}
function hideForm(id) {
  let form = document.getElementById(id);
  form.hidden = true;
}

function checkOption(id, idForm) {
  document.getElementById(id).checked
    ? showHiddenForm(idForm)
    : hideForm(idForm);
}
//Manejando el modal de cierre de sesión
const myModal = new bootstrap.Modal(
  document.getElementById("modalId"),
  options
);
