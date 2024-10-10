;(() => {
  // Отримуємо посилання на чекбокс і кнопку
  const checkBox = document.getElementById('exampleCheck1')
  const submitButton = document.getElementById('submitButton')

  // Додаємо обробник подій для події зміни стану чекбоксу
  checkBox.addEventListener('change', function () {
    // Перевіряємо, чи встановлений чекбокс
    if (checkBox.checked) {
      // Якщо чекбокс встановлений, робимо кнопку доступною
      submitButton.disabled = false
    } else {
      // Якщо чекбокс не встановлений, робимо кнопку недоступною
      submitButton.disabled = true
    }
  })
})()

$(document).ready(function () {
  $('form').submit(function (e) {
    e.preventDefault() // Відміна стандартної поведінки форми

    // Отримання значень полів форми
    var nameValue = $('#exampleInputName1').val()
    var phoneValue = $('#exampleInputPhone1').val()
    var emailValue = $('#exampleInputEmail1').val()


    // Перевірка заповненості полів
    if (nameValue === '' || phoneValue === '' || emailValue === '') {
      const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
      errorModal.show(); 
      return; 
    }

    // Отримання даних форми
    var formData = $(this).serialize()

    // Відправка запиту через AJAX
    $.ajax({
      type: 'POST',
      url: 'sendmail.php',
      data: formData,
      success: function (response) {

        gtag('event', 'screen_view', {
          'app_name': 'myAppName',
          'screen_name': 'Form Submitted'
        });
        
        // Обробка відповіді
        if (response === 'Повідомлення успішно надіслано') {
          $('#successModal').modal('show'); // Показать модальное окно успеха
        } else {
          $('#customErrorMessage').text('Помилка: ' + response);
          $('#customErrorModal').modal('show'); // Показать модальное окно ошибки
        }
      },
      error: function () {
        $('#customErrorMessage').text('Сталася помилка під час відправки запиту.');
        $('#customErrorModal').modal('show'); // Показать модальное окно ошибки
      },
    })
  })
})

