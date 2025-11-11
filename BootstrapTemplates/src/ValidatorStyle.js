/**
 * ValidatorStyle class provides static methods to visually indicate validation errors on form inputs.
 * It sets or clears error styles and help messages for input elements by their id.
 * @export
 * @class ValidatorStyle
 */
export class ValidatorStyle {
  /**
   * Applies error or success styling to an input element based on a condition.
   * If the condition is a function, it is called to get the boolean value.
   * If true, clears error styling; if false, sets error styling.
   * @static
   * @param {boolean|function} condition - Boolean value or function returning boolean to determine validity.
   * @param {string} id - The id of the input element to style.
   * @memberof ValidatorStyle
   */
  static styleInput(condition, id) {
    const value = typeof condition === "function" ? condition() : condition;
    value ? this.clearError(id) : this.setError(id);
  }
  /**
   * Sets error styling and shows the help message for an input element.
   * Adds the 'border-danger' class and makes the help message visible.
   * @static
   * @param {string} id - The id of the input element to mark as invalid.
   * @memberof ValidatorStyle
   */
  static setError(id) {
    let input = document.getElementById(id);
    document.getElementById(id + "Help").style.visibility = "visible";
    input.classList.add("border-danger");
  }
  /**
   * Clears error styling and hides the help message for an input element.
   * Removes the 'border-danger' class and hides the help message.
   * @static
   * @param {string} id - The id of the input element to mark as valid.
   * @memberof ValidatorStyle
   */
  static clearError(id) {
    let input = document.getElementById(id);
    document.getElementById(id + "Help").style.visibility = "hidden";
    input.classList.remove("border-danger");
  }
}
