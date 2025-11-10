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
