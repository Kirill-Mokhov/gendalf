let selector = document.querySelector("#tel")
let im = new Inputmask("+7(999) 999-99-99")
im.mask(selector)

let inputs = document.querySelectorAll('.interview__container__form-input-item');

inputs.forEach(input => {
  let errorSvg = input.querySelector('.error__svg');
  let successSvg = input.querySelector('.success__svg');

  input.addEventListener('input', function () {
    let inputId = input.querySelector('.interview__input');
    let minLength = inputId.getAttribute('minlength');
    handleInputValidate(inputId, errorSvg, successSvg, minLength);
  });

});

function handleInputValidate(inputElement, errorSvgElement, successSvgElement, permissibleLength) {
  let valueElement;

  if (inputElement.id === 'tel') {
    valueElement = selector.inputmask.unmaskedvalue();
  } else {
    valueElement = inputElement.value;
  }

  if (valueElement.length < permissibleLength) {
    inputElement.classList.add('error');
    inputElement.classList.remove('success');
    errorSvgElement.classList.remove('hidden');
    successSvgElement.classList.add('hidden');
  } else {
    inputElement.classList.add('success');
    inputElement.classList.remove('error');
    errorSvgElement.classList.add('hidden');
    successSvgElement.classList.remove('hidden');
  }
}