// Funciones utilitarias para mostrar/ocultar formularios según
// las opciones seleccionadas en la UI. Se usan desde
// `menuRestaurante.php` para mostrar formularios dinámicamente.
function showHiddenForm(id) {
  let form = document.getElementById(id);
  form.hidden = false;
}
function hideForm(id) {
  let form = document.getElementById(id);
  form.hidden = true;
}

// Activa o desactiva el formulario dependiente de una casilla
// de verificación: si la checkbox está marcada muestra el formulario.
function checkOption(id, idForm) {
  document.getElementById(id).checked
    ? showHiddenForm(idForm)
    : hideForm(idForm);
}

// Inicialización de modal de Bootstrap para confirmar cierre de sesión.
// `modalId` debe existir en el DOM; `options` se puede definir si
// se necesitan parámetros personalizados (ej. backdrop, keyboard).
// Nota: la variable `options` viene de la página que lo use o puede
// omitirse si no se requieren opciones especiales.
try {
  const myModal = new bootstrap.Modal(
    document.getElementById("modalId")
  );
} catch (e) {
  // Si no existe Bootstrap o el modal aún no está en el DOM, no falla.
  // Esto evita errores en entornos donde el script se carga antes.
}
