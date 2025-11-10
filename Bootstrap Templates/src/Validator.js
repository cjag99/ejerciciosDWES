export class Validator {
  static NAME = /^[A-Za-z ]+$/;
  static EMAIL =
    /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
  static DNI = /^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i;
  static validateNumber(id) {
    let number = Number(document.getElementById(id).value);
    return !isNaN(number);
  }
  static validateInteger(id) {
    let number = Number(document.getElementById(id).value);
    return Validator.validateNumber(id) && Number.isInteger(number);
  }
  static validateDecimal(id) {
    let number = Number(document.getElementById(id).value);
    return Validator.validateNumber && !Number.isInteger(number);
  }
  static validatePositive(id) {
    let number = Number(document.getElementById(id).value);
    return Validator.validateNumber(number) && number >= 0;
  }
  static validateNaturalNumber(id) {
    let number = Number(document.getElementById(id).value);
    return Validator.validateInteger(id) && Validator.validatePositive(id);
  }
  static validateText(id) {
    let text = document.getElementById(id).value.trim();
    return text != null && text != undefined;
  }
  static validateName(id) {
    let text = document.getElementById(id).value.trim();
    return Validator.validateText(id) && text.test(Validator.NAME);
  }
  static validateEmail(id) {
    let text = document.getElementById(id).value.trim();
    return Validator.validateText(id) && text.test(Validator.EMAIL);
  }
  static validateDni(id) {
    let text = document.getElementById(id).value.trim();
    return Validator.validateText(id) && text.test(Validator.DNI);
  }
}
