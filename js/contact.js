const form = document.getElementById('form');
const response = document.getElementById('response'); // okienko z komunikatem
const button = document.getElementById('submit');

// 2 teksty przycisku. Przełącza się on między nimi.
const sendText = document.getElementById('sendText');
const waitText = document.getElementById('waitText');

form.addEventListener('submit', event => {
  // Zatrzymanie domyślnej walidacji i wysyłania
  event.preventDefault();
  event.stopPropagation();
  // Włączenie komunikatów walidacji BS-a
  form.classList.add('was-validated');

  if (!form.checkValidity()) return;

  // ochrona przed przypadkowym ponownym wysłaniem, lekki anty-spam
  button.setAttribute('disabled','disabled');
  sendText.classList.add('d-none');
  waitText.classList.remove('d-none');

  setTimeout(function () {
    button.blur();
  }, 500);
  setTimeout(function () {
    // ponowne włączenie przycisku
    button.removeAttribute('disabled');
    waitText.classList.add('d-none');
    sendText.classList.remove('d-none');
  }, 15000);

  const data = new FormData(form);

  fetch('../php/contact.php', {
    body: data,
    method: 'POST'
  })
  .then(result => result.text()) // zamiana odpowiedzi od skryptu na stringa
  .then(text => {
    // Usunięcie starego tekstu i wstawienie nowego
    response.removeChild(response.lastChild);
    const textNode = document.createTextNode(text);
    response.appendChild(textNode);

    // Nadanie komunikatowi klas z odpowiednimi stylami
    const success = text.indexOf('błąd') < 0;
    if (success) {
      response.classList.remove('alert-danger','border-danger');
      response.classList.add('alert-success','border-success');
    } else {
      response.classList.remove('alert-success','border-success');
      response.classList.add('alert-danger','border-danger');
    }

    // Chwilowe wyświetlenie komunikatu z animacją
    response.style.display = 'block';
    setTimeout(function () {
      response.style.display = 'none';
      form.classList.remove('was-validated');
    }, 4000);
  });
});