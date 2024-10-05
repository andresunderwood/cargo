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
      // Якщо хоча б одне поле не заповнено, відмінити відправку форми та вивести повідомлення про помилку
      alert('Будь ласка, заповніть всі поля форми.')
      return
    }

    // Отримання даних форми
    var formData = $(this).serialize()

    // Відправка запиту через AJAX
    $.ajax({
      type: 'POST',
      url: 'sendmail.php',
      data: formData,
      success: function (response) {
        // Обробка відповіді
        if (response == 'Повідомлення успішно надіслано') {
          alert('Email відправлено успішно!')
        } else {
          alert('Помилка: ' + response)
        }
      },
      error: function () {
        alert('Сталася помилка під час відправки запиту.')
      },
    })
  })
})

