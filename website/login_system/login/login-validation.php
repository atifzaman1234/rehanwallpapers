const form = document.querySelector('form');
const name = document.querySelector('.name');
const password = document.querySelector('.Password');
const error_output = document.querySelector('.error');

form.addEventListener('submit', (e) => {
  let messages = [];
  if (name.value === '' || name.value == null) {
    messages.push('Enter username')
  }else if (name.value.length <= 3) {
    messages.push('Wrong name')
  }

  if (password.value === '' || password.value == null) {
    messages.push('Enter password')
  }else if (password.value.length < 6) {
    messages.push('Wrong password')
  }

  if (messages.length > 0) {
    e.preventDefault();
    error_output.innerText = messages.join(',')
  }
})
