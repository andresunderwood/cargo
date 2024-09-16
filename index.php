<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cargo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-347307259"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-347307259');
  </script>
</head>

<body>
<!-- Header -->
    <div class="header-top py-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 d-flex justify-content-center">
            <a class="navbar-brand" href="#"></a>
              <img src="./images/logo.svg" alt="" />
            </a>
          </div>
          <div class="col-md-2 d-flex align-items-center justify-content-end">
            <div class="header-top-phone d-flex align-items-center">
              <svg width="16" height="16" class="header-contact-icon">
                <use href="./images/symbol-defs.svg#icon-phone"></use>
              </svg>
              <a class="nav-link" aria-current="page" href="tel:+380987808008">+380987808008</a>
            </div>
          </div>
          <div class="col-md-2 d-flex justify-content-end align-items-center">
            <ul class="social-icons d-flex gap-3">
              <li><a href="https://www.instagram.com/easycargo.ua/">
                <i class="fa-brands fa-instagram header-social-icon"></i>
              </a></li>
              <li><a href="https://www.facebook.com/easycargoua">
                <i class="fa-brands fa-facebook-f header-social-icon"></i>
              </a></li>
              <li><a href="">
                <i class="fa-brands fa-linkedin-in header-social-icon"></i>
              </a></li>
            </ul>
          </div>
          <div class="col-md-4 d-flex justify-content-end gap-2">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#deliveryCalculationModal">Вартість доставки</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Відстежити</button> 
          </div>
        </div>
      </div>
    </div> 
    <header class="sticky-top">    
      <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll justify-content-center">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#nearest-container">Головна</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#our-services">Про нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#stages-work">Наші послуги</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faq">Умови прийому вантажу</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact-form">Блог</a>
              </li>
              <li class="nav-item nav-item-lg">
                <a class="nav-link active" href="/ua">UA</a><span>| RU</span>
              </li>
            </ul>
          </div>
        </div>
      </nav>      
    </header>
    <!-- deliveryCalculationModal -->
    <div class="modal fade" id="deliveryCalculationModal" tabindex="-1" aria-labelledby="deliveryCalculationModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deliveryCalculationModalLabel">Дізнайтесь попередню вартість доставки</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label class="form-label">Оберіть спосіб доставки</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deliveryMethod" id="express" value="express">
                  <label class="form-check-label" for="express">Експрес авіадоставка з Китаю</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deliveryMethod" id="seaAuto" value="sea-auto">
                  <label class="form-check-label" for="seaAuto">Море - Авто (60 - 65 днів)</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deliveryMethod" id="seaTrain" value="sea-train">
                  <label class="form-check-label" for="seaTrain">Море - Поїзд (45 днів)</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deliveryMethod" id="europe" value="europe">
                  <label class="form-check-label" for="europe">Доставка з Європи (10 - 14 днів)</label>
                </div>
              </div>    
              <div class="mb-3">
                <label for="productCategory" class="form-label">Оберіть категорію товару</label>
                <select class="form-select" id="productCategory">
                  <option selected>Оберіть категорію...</option>
                  <option value="electronics">Електротовари, мобільні аксесуари</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="cargoWeightVolume" class="form-label">Вага і об'єм вантажу з упаковкою</label>
                <input type="text" class="form-control" id="cargoWeightVolume" placeholder="Введіть масу, кг / об'єм, куб. м.">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control" id="email" placeholder="Напишіть ваш email" required>
              </div>
              <div class="mb-3">
                <label for="fullName" class="form-label">Ім'я, Прізвище</label>
                <input type="text" class="form-control" id="fullName" placeholder="Ваше ім'я">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Телефон*</label>
                <input type="tel" class="form-control" id="phone" placeholder="+380..." required>
              </div>
            </form>
          </div>
          <div class="modal-footer d-flex justify-content-center">            
            <button type="button" class="btn btn-primary">Дізнатися вартість</button>
          </div>
        </div>
      </div>
    </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 d-flex justify-content-center">
            <a class="navbar-brand" href="#"></a>
              <img src="./images/logo.svg" alt="" />
            </a>
          </div>
          <div class="col-md-2 d-flex align-items-center justify-content-end">
            <div class="header-top-phone d-flex align-items-center">
              <svg width="16" height="16" class="header-contact-icon">
                <use href="./images/symbol-defs.svg#icon-phone"></use>
              </svg>
              <a class="nav-link" aria-current="page" href="tel:+380987808008">+380987808008</a>
            </div>
          </div>
          <div class="col-md-2 d-flex justify-content-end align-items-center">
            <ul class="social-icons d-flex gap-3">
              <li><a href="https://www.instagram.com/easycargo.ua/">
                <i class="fa-brands fa-instagram header-social-icon"></i>
              </a></li>
              <li><a href="https://www.facebook.com/easycargoua">
                <i class="fa-brands fa-facebook-f header-social-icon"></i>
              </a></li>
              <li><a href="">
                <i class="fa-brands fa-linkedin-in header-social-icon"></i>
              </a></li>
            </ul>
          </div>
          <div class="col-md-4 d-flex justify-content-end gap-2">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#deliveryCalculationModal">Вартість доставки</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Відстежити</button> 
          </div>
        </div>
      </div>
    </div> 
    <header class="sticky-top">    
      <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll justify-content-center">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#nearest-container">Головна</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#our-services">Про нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#stages-work">Наші послуги</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faq">Умови прийому вантажу</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact-form">Блог</a>
              </li>
              <li class="nav-item nav-item-lg">
                <span>UA</span><a class="nav-link active" href="/ru">| RU</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>      
    </header>
    <!-- deliveryCalculationModal -->
    <div class="modal fade" id="deliveryCalculationModal" tabindex="-1" aria-labelledby="deliveryCalculationModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deliveryCalculationModalLabel">Дізнайтесь попередню вартість доставки</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label class="form-label">Оберіть спосіб доставки</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deliveryMethod" id="express" value="express">
                  <label class="form-check-label" for="express">Експрес авіадоставка з Китаю</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deliveryMethod" id="seaAuto" value="sea-auto">
                  <label class="form-check-label" for="seaAuto">Море - Авто (60 - 65 днів)</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deliveryMethod" id="seaTrain" value="sea-train">
                  <label class="form-check-label" for="seaTrain">Море - Поїзд (45 днів)</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="deliveryMethod" id="europe" value="europe">
                  <label class="form-check-label" for="europe">Доставка з Європи (10 - 14 днів)</label>
                </div>
              </div>    
              <div class="mb-3">
                <label for="productCategory" class="form-label">Оберіть категорію товару</label>
                <select class="form-select" id="productCategory">
                  <option selected>Оберіть категорію...</option>
                  <option value="electronics">Електротовари, мобільні аксесуари</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="cargoWeightVolume" class="form-label">Вага і об'єм вантажу з упаковкою</label>
                <input type="text" class="form-control" id="cargoWeightVolume" placeholder="Введіть масу, кг / об'єм, куб. м.">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control" id="email" placeholder="Напишіть ваш email" required>
              </div>
              <div class="mb-3">
                <label for="fullName" class="form-label">Ім'я, Прізвище</label>
                <input type="text" class="form-control" id="fullName" placeholder="Ваше ім'я">
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Телефон*</label>
                <input type="tel" class="form-control" id="phone" placeholder="+380..." required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Рассчитать стоимость</button>
          </div>
        </div>
      </div>
    </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>