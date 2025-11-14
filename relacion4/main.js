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
function unlockOptions(id) {
  let restaurants = JSON.parse(sessionStorage.getItem("restaurants")) || [];
  let name = document.getElementById(id).value.trim();
  restaurants.push(name);
  sessionStorage.setItem("restaurants", JSON.stringify(restaurants));
  document.getElementById("options").hidden = false;
}
function lockOptions(id) {
  let name = document.getElementById(id).value.trim();
  let restaurants = JSON.parse(sessionStorage.getItem("restaurants")) || [];
  restaurants = restaurants.filter((r) => r !== name);
  sessionStorage.setItem("restaurants", JSON.stringify(restaurants));
  document.getElementById("options").hidden = true;
}
window.onload = () => {
  let restaurants = JSON.parse(sessionStorage.getItem("restaurants")) || [];
  document.getElementById("options").hidden = restaurants.length === 0;
};
