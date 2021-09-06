const form = document.querySelector('form');
const name = document.querySelector('.name');
const email = document.querySelector('.email');
const password = document.querySelector('.Password');
const error_output = document.querySelector('.error');

form.addEventListener('submit', (event) => {
  let messages = [];
  console.log(messages)
  const regex = /[a-zA-Z0-9]+@[a-z]{2,16}\.[a-z]{2,4}/gi;

  //*now checking for errors
  //name part
  if (name.value === '' || name.value == null) {
    messages.push('Name is empty');
  } else if (name.value.length <= 3) {
    messages.push('Name must longer')
  } else if (name.value.length > 18) {
    messages.push('Name must be shorter')
  }
  if (/^[0-9]+/gi.test(name.value) == true) {
    messages.push('Number not allowed as first letter');
  }
  //email part
  if (email.value === '' || email.value == null) {
    messages.push('Email is empty');
  } else if (regex.test(email.value) == false) {
    messages.push('Enter valid email');
  }
  //password part
  if (password.value === '' || password.value == null) {
    messages.push('Password is empty');
  } else if (password.value.length < 6) {
    messages.push('Password must be longer than 6')
  }

  //last check
  if (messages.length > 0) {
    event.preventDefault();
    error_output.innerText = messages.join(',');
  }
})