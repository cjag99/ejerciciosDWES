/**
 * Validator class provides static methods and regular expressions for validating common form inputs such as names, emails, DNI, and numbers.
 * All methods operate on DOM input elements by their id and return boolean results indicating validity.
 * @export
 * @class Validator
 */
export class Validator {
  /**
   * Regular expression to validate names (letters and spaces only).
   * @static
   * @type {RegExp}
   */
  static NAME = /^[A-Za-z ]+$/;
  /**
   * Regular expression to validate email addresses (RFC 5322 compliant).
   * @static
   * @type {RegExp}
   */
  static EMAIL =
    /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
  /**
   * Regular expression to validate Spanish DNI (8 digits followed by a letter).
   * @static
   * @type {RegExp}
   */
  static DNI = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i;
  /**
   * Validates if the input value is a number.
   * @static
   * @param {string} id - The id of the input element to validate.
   * @returns {boolean} True if the value is a number, false otherwise.
   * @memberof Validator
   */
  static validateNumber(id) {
    const input = document.getElementById(id);
    if (!input) {
      console.error(`Input con id '${id}' no encontrado`);
      return false;
    }
    const number = Number(input.value);
    return !isNaN(number);
  }
  /**
   * Validates if the input value is an integer.
   * @static
   * @param {string} id - The id of the input element to validate.
   * @returns {boolean} True if the value is an integer, false otherwise.
   * @memberof Validator
   */
  static validateInteger(id) {
    if (!this.validateNumber(id)) return false;
    const number = Number(document.getElementById(id).value);
    return Number.isInteger(number);
  }
  /**
   * Validates if the input value is a decimal (not an integer).
   * @static
   * @param {string} id - The id of the input element to validate.
   * @returns {boolean} True if the value is a decimal, false otherwise.
   * @memberof Validator
   */
  static validateDecimal(id) {
    if (!this.validateNumber(id)) return false;
    const number = Number(document.getElementById(id).value);
    return !Number.isInteger(number);
  }
  /**
   * Validates if the input value is a positive number (>= 0).
   * @static
   * @param {string} id - The id of the input element to validate.
   * @returns {boolean} True if the value is positive, false otherwise.
   * @memberof Validator
   */
  static validatePositive(id) {
    if (!this.validateNumber(id)) return false;
    const number = Number(document.getElementById(id).value);
    return number >= 0;
  }
  /**
   * Validates if the input value is a natural number (integer and positive).
   * @static
   * @param {string} id - The id of the input element to validate.
   * @returns {boolean} True if the value is a natural number, false otherwise.
   * @memberof Validator
   */
  static validateNaturalNumber(id) {
    return this.validateInteger(id) && this.validatePositive(id);
  }
  /**
   * Validates if the input value is non-empty text.
   * @static
   * @param {string} id - The id of the input element to validate.
   * @returns {boolean} True if the value is non-empty, false otherwise.
   * @memberof Validator
   */
  static validateText(id) {
    const input = document.getElementById(id);
    if (!input) {
      console.error(`Input con id '${id}' no encontrado`);
      return false;
    }
    const text = input.value.trim();
    return text.length > 0;
  }
  /**
   * Validates if the input value is a valid name (letters and spaces only).
   * @static
   * @param {string} id - The id of the input element to validate.
   * @returns {boolean} True if the value matches the name pattern, false otherwise.
   * @memberof Validator
   */
  static validateName(id) {
    if (!this.validateText(id)) return false;
    const text = document.getElementById(id).value.trim();
    return this.NAME.test(text);
  }
  /**
   * Validates if the input value is a valid email address.
   * @static
   * @param {string} id - The id of the input element to validate.
   * @returns {boolean} True if the value matches the email pattern, false otherwise.
   * @memberof Validator
   */
  static validateEmail(id) {
    if (!this.validateText(id)) return false;
    const text = document.getElementById(id).value.trim();
    return this.EMAIL.test(text);
  }
  /**
   * Validates if the input value is a valid Spanish DNI (8 digits and a letter).
   * @static
   * @param {string} id - The id of the input element to validate.
   * @returns {boolean} True if the value matches the DNI pattern, false otherwise.
   * @memberof Validator
   */
  static validateDni(id) {
    if (!this.validateText(id)) return false;
    const text = document.getElementById(id).value.trim();
    return this.DNI.test(text);
  }
}
