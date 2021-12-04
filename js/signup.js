const form = document.querySelector('form'),
  continueBtn = document.querySelector('#continue');

form.addEventListener('submit', e => {
  e.preventDefault();
});

continueBtn.addEventListener('click', () => {
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'php/signup.php', true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        const data = xhr.response;
        console.log(data);
      }
    }
  };

  const formData = new FormData(form);
  xhr.send(formData);
});
