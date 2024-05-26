<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cargo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/main.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <!-- Header -->
  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./images/logo.svg" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#nearest-container">Найближча відправка</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#our-services">Чим ми кращі</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#stages-work">Етапи роботи</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faq">Запитання/відповіді</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact-form">Контакти</a>
            </li>
          </ul>

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item nav-contact-icon">
              <svg width="16" height="16" class="header-contact-icon">
                <use href="./images/symbol-defs.svg#icon-telegram"></use>
              </svg>
              <svg width="16" height="16" class="header-contact-icon">
                <use href="./images/symbol-defs.svg#icon-phone"></use>
              </svg>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tel:+380987808008">+380987808008</a>
            </li>
            <li class="nav-item nav-item-lg"><span>UA</span><a class="nav-link active" href="/ru">| RU</a></li>
          </ul>
          <form class="d-flex" role="search">
            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" /> -->
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Завантажити програму</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Мобільний додаток</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Залишилося зовсім небагато і все буде. Спробуйте трохи пізніше.</div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Main -->
  <main>
    <!-- Hero -->
    <section class="hero-section section" data-bs-theme="dark">
      <div class="container">
        <div class="row">
          <div class="col-md-7 order-xl-1"><img src="./images/hero.gif" class="img-hego" width="880px" alt="Ship" /></div>
          <div class="col-md-5 order-xl-0 my-3">
            <h1>Доставка консолідованих вантажів з Китаю морем</h1>
            <h4>
              <span class="span-icon-before">
                <svg width="24" height="24" class="main-svg-icon">
                  <use href="./images/symbol-defs.svg#icon-star"></use>
                </svg>
              </span>
              Слідкуйте за доставкою вантажу
            </h4>
            <div class="hero-search">
              <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Завантажити програму</button>
            </div>
            <p class="hero-text">Або залиште заявку на доставку вантажу</p>
            <a href="#contact-form"><button type="button" class="btn btn-outline-primary">Залишити заявку</button></a>
          </div>
        </div>
      </div>
    </section>

    <?php
    $filename = 'data.txt';

    if (file_exists($filename)) {
      $data = file_get_contents($filename);

      $lines = explode("\n", $data);

      // Пошук і встановлення значень змінних
      $days = $fullness = $days_ru = $fullness_ru = '';
      foreach ($lines as $line) {
        if (strpos($line, 'Days: ') !== false) {
          $days = trim(str_replace('Days: ', '', $line));
        }
        if (strpos($line, 'Fullness: ') !== false) {
          $fullness = trim(str_replace('Fullness: ', '', $line));
        }
        if (strpos($line, 'Days_ru: ') !== false) {
          $days_ru = trim(str_replace('Days_ru: ', '', $line));
        }
        if (strpos($line, 'Fullness_ru: ') !== false) {
          $fullness_ru = trim(str_replace('Fullness_ru: ', '', $line));
        }
      }
    } else {
      echo "Файл не знайдено.";
    }

    ?>

    <!-- Week section -->
    <section id="nearest-container" class="nearest-container-section section" data-bs-theme="dark">
      <div class="container">
        <div class="row">
          <div class="col-md-5 my-3">
            <h2>Відправляємо 2-4 контейнери на місяць</h2>
            <h4 class="nearest-container-subtitle">Найближчий до відправки контейнер</h4>
            <div class="row nearest-container-row">
              <p>До відправки</p>
              <h5>
                <span class="span-icon-before">
                  <svg width="24" height="24" class="main-svg-icon">
                    <use href="./images/symbol-defs.svg#icon-clock"></use>
                  </svg>
                </span>
                <?php echo "$days" ?>
              </h5>
            </div>
            <div class="row nearest-container-row">
              <p>Рівень заповненості</p>
              <h5>
                <span class="span-icon-before">
                  <svg width="24" height="24" class="main-svg-icon">
                    <use href="./images/symbol-defs.svg#icon-pack"></use>
                  </svg>
                </span>
                <?php echo "$fullness%" ?>
              </h5>
            </div>
            <a href="#contact-form"><button type="button" class="btn btn-primary">Залишити заявку</button></a>
          </div>
          <div class="col-md-7 justify-content-md-center"><img class="w-100" src="./images/<?php echo "$fullness" ?>.svg" alt="Container" /></div>
        </div>
      </div>
    </section>

    <!-- Our services -->
    <section id="our-services" class="our-services-section section" data-bs-theme="dark">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-4">
            <h2>Ми пропонуємо</h2>
            <h4>Якісний сервіс доставки вантажів з Китаю в Україну</h4>
          </div>
          <div class="col-md-6 col-lg-4">
            <h3>
              <span class="span-icon-before">
                <svg width="24" height="24" class="main-svg-icon">
                  <use href="./images/symbol-defs.svg#icon-label"></use>
                </svg>
              </span>
              Фіксований тариф
            </h3>
            <p>Тариф, погоджений з Вами при прорахунку, не змінюється у процесі доставки</p>
            <h3>
              <span class="span-icon-before">
                <svg width="24" height="24" class="main-svg-icon">
                  <use href="./images/symbol-defs.svg#icon-workbook"></use>
                </svg>
              </span>
              Оформлення документів
            </h3>
            <p>Наша компанія бере на себе оформлення всіх необхідних документів для того, щоб Ваш бізнес мав первинні документи на вантаж</p>
          </div>
          <div class="col-md-6 col-lg-4">
            <h3>
              <span class="span-icon-before">
                <svg width="24" height="24" class="main-svg-icon">
                  <use href="./images/symbol-defs.svg#icon-clock"></use>
                </svg>
              </span>
              Доставка ON TIME
            </h3>
            <p>Наша компанія не працює з "брендовими" товарами та виконує цілий комплекс заходів націлених на те, щоб Ваш вантаж прибував вчасно</p>
            <h3>
              <span class="span-icon-before">
                <svg width="24" height="24" class="main-svg-icon">
                  <use href="./images/symbol-defs.svg#icon-car"></use>
                </svg>
              </span>
              Індивідуальний підхід
            </h3>
            <p>Індивідуальний підхід до вирішення нестандартних завдань у доставці Вашого вантажу</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Stages of work -->
    <section id="stages-work" class="stages-work-section section" data-bs-theme="dark">
      <div class="container">
        <div class="row">
          <div class="col-md-5 my-3">
            <h2>Етапи роботи</h2>
            <ul class="stages-work-list">
              <li>
                <div class="stages-work-list-item-thumb">
                  <span class="span-icon-before">
                    <svg width="24" height="24" class="main-svg-icon">
                      <use href="./images/symbol-defs.svg#icon-star2"></use>
                    </svg>
                  </span>
                  <h3>Залишаєте заявку</h3>
                </div>
                <p>Заявку можна оформити, заповнивши форму на сайті або зателефонувавши менеджеру</p>
              </li>
              <li>
                <div class="stages-work-list-item-thumb">
                  <span class="span-icon-before">
                    <svg width="24" height="24" class="main-svg-icon">
                      <use href="./images/symbol-defs.svg#icon-star2"></use>
                    </svg>
                  </span>
                  <h3>Отримуєте прорахунок, код клієнта та адресу складу в Китаї</h3>
                </div>
                <p>Постачальник маркує всі коробки Вашим індивідуальним кодом</p>
              </li>
              <li>
                <div class="stages-work-list-item-thumb">
                  <span class="span-icon-before">
                    <svg width="24" height="24" class="main-svg-icon">
                      <use href="./images/symbol-defs.svg#icon-star2"></use>
                    </svg>
                  </span>
                  <h3>Отримуємо Ваш вантаж на складі у Китаї</h3>
                </div>
                <p>Прийом, оформлення та підготовка до відправки вантажу на нашому складі у Китаї</p>
              </li>
              <li>
                <div class="stages-work-list-item-thumb">
                  <span class="span-icon-before">
                    <svg width="24" height="24" class="main-svg-icon">
                      <use href="./images/symbol-defs.svg#icon-star2"></use>
                    </svg>
                  </span>
                  <h3>Відправка контейнера</h3>
                </div>
                <p>Наша компанія використовує прямі лінії доставки контейнера, що прискорює процес доставки Вашого вантажу</p>
              </li>
              <li>
                <div class="stages-work-list-item-thumb">
                  <span class="span-icon-before">
                    <svg width="24" height="24" class="main-svg-icon">
                      <use href="./images/symbol-defs.svg#icon-star2"></use>
                    </svg>
                  </span>
                  <h3>Отримання вантажу в Україні</h3>
                </div>
                <p>Вантаж можна забрати з нашого складу в Одесі, або ми погодимо доставку будь-якою зручною поштовою службою</p>
              </li>
            </ul>
          </div>
          <div class="col-md-7">
            <img src="./images/ship2.jpg" alt="Ship" />
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ section -->
    <section id="faq" class="faq-section section" data-bs-theme="dark">
      <div class="container">
        <h2>Запитання/відповіді</h2>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Чому багато хто вибирає доставку морем?</button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
              <div class="accordion-body">Морські перевезення дуже надійний та недорогий вид доставки. Морський транспорт не обмежує вантажі за вагою та габаритами. Контейнери з товаром пломбують і опечатують для збереження вмісту.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Які терміни доставки вантажів з Китаю до України морем?</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">У середньому процес доставки контейнера до України складає 55-70 днів.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Які обмеження на ввезення товарів з Китаю в Україну?</button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Законодавство України забороняє ввозити товари, які можуть завдати шкоди іншим предметам, цінні рослини, тварин, антикваріат, дорогоцінні метали, психотропні речовини, балони з рідиною та газом, зброю та матеріали, з яких воно може
                виготовлятися.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Яку інформацію необхідно надати нам під час відправлення вантажу?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">При відправленні вантажу необхідно дати нам пакувальний лист, він повинен містити інформацію про вміст кожної коробки, розміри та вагу коробки</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Коли відбувається оплата за доставлений вантаж?</button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">Оплата за доставку Вашого вантажу відбувається в момент, коли вантаж вже знаходиться на нашому складі в Україні.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact form -->
    <section id="contact-form" class="contact-form-section section" data-bs-theme="dark">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h2>Оформити заявку</h2>
            <p>Заповніть форму, щоб наш менеджер зв'язався з Вами!</p>
            <form action="sendmail.php" method="post">
              <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Ім'я</label>
                <input type="text" class="form-control" id="exampleInputName1" name="exampleInputName1" />
              </div>
              <div class="mb-3">
                <label for="exampleInputPhone1" class="form-label">Телефон</label>
                <input type="text" class="form-control" id="exampleInputPhone1" name="exampleInputPhone1" />
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Електронна пошта</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="exampleInputEmail1" />
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">Згода на обробку даних, згідно з політикою конфіденційності</label>
              </div>
              <button type="submit" class="btn btn-primary" id="submitButton" disabled>Відправити запит</button>
            </form>
          </div>
          <div class="col-md-7">
            <img src="./images/Lifebuoy.svg" alt="" />
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer -->
  <footer>
    <p>Ⓒ EasyCargo 2023 All rights reserved</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>