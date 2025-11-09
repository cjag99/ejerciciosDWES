export class Validator {
  static validateNumber(id) {
    let number = Number(document.getElementById(id).value);
    return isNaN(number);
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
  static validateText(id) {
    let text = document.getElementById(id).value;
    return text == "" || text == null ? false : true;
  }
}
