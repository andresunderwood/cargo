<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cargo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/main.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SYEDDCJD6B"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-SYEDDCJD6B');
  </script>
</head>

<body>
  <!-- Header -->
  <div id="hero" class="header-top py-2">
    <div class="container-fluid">
      <div class="row">
        <div class=" logo col-xl-4 d-flex">
          <a class="navbar-brand" href="#"></a>
          <img src="./images/logo.svg" alt="" />
          </a>
        </div>
        <div class="col-xl-2 d-flex align-items-center justify-content-end">
          <div class="header-top-phone d-flex align-items-center gap-1">
            <a class="nav-link" aria-current="page" href="https://wa.me/380987808008"><i class="fa-brands fa-whatsapp header-social-icon"></i></a>
            <a class="nav-link" aria-current="page" href="https://t.me/+380987808008"><i class="fa-brands fa-telegram header-social-icon"></i></a>
            <svg width="16" height="16" class="header-social-icon">
              <use href="./images/symbol-defs.svg#icon-phone"></use>
            </svg>
            <a class="nav-link" aria-current="page" href="tel:+380987808008">+380987808008</a>
          </div>
        </div>
        <div class="col-xl-2 d-flex justify-content-end align-items-center">
          <ul class="d-flex gap-3">
            <li><a href="https://www.instagram.com/easycargo.ua/">
                <i class="fa-brands fa-instagram social-icon"></i>
              </a></li>
            <li><a href="https://www.facebook.com/easycargoua">
                <i class="fa-brands fa-facebook-f social-icon"></i>
              </a></li>
            <li><a href="">
                <i class="fa-brands fa-linkedin-in social-icon"></i>
              </a></li>
          </ul>
        </div>
        <div class="col-xl-4 d-flex justify-content-end gap-2">
          <button class=" header-button btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#deliveryCalculationModal">Стоимость доставки</button>
          <button class=" header-button btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Отследить</button>
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
              <a class="nav-link" aria-current="page" href="#hero">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutUs">О нас</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Наши услуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#collaboration">Процесс сотрудничества</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faq">Вопрос/ответ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact-form">Контакты</a>
            </li>
            <li class="nav-item nav-item-lg"><a class="nav-link active" href="/">UA</a><span>| RU</span></li>
          </ul>
          <div class="secret">
            <ul class="d-flex gap-3">
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
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#deliveryCalculationModal">Стоимость доставки</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Отследить</button>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- deliveryCalculationModal -->
  <div class="modal fade" id="deliveryCalculationModal" tabindex="-1" aria-labelledby="deliveryCalculationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deliveryCalculationModalLabel">Узнайте предварительную стоимость доставки</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label class="form-label">Выберите способ доставки</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="deliveryMethod" id="express" value="express">
                <label class="form-check-label" for="express">Экспресс авиадоставка из Китая</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="deliveryMethod" id="seaAuto" value="sea-auto">
                <label class="form-check-label" for="seaAuto">Море - Авто (60 - 65 дней)</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="deliveryMethod" id="seaAuto" value="sea-auto">
                <label class="form-check-label" for="seaAuto">Доставка из Китая в Европу</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="deliveryMethod" id="seaAuto" value="sea-auto">
                <label class="form-check-label" for="seaAuto">Доставка сборных грузов (LCL)</label>
              </div>
            </div>
            <div class="mb-3">
              <label for="city" class="form-label">Город доставки</label>
              <input type="text" class="form-control" id="city" placeholder="Введите ваш город" required>
            </div>
            <div class="mb-3">
              <label for="productCategory" class="form-label">Выберите категорию товара</label>
              <select class="form-select" id="productCategory">
                <option selected>Выберите категорию...</option>
                <option value="electronics">Электротовары, мобильные аксессуары</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="cargoWeightVolume" class="form-label">Вес и объем груза с упаковкой</label>
              <input type="text" class="form-control" id="cargoWeightVolume" placeholder="Введите массу, кг / объем, куб. м.">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email*</label>
              <input type="email" class="form-control" id="email" placeholder="Напишите ваш email" required>
            </div>
            <div class="mb-3">
              <label for="fullName" class="form-label">Имя, Фамилия</label>
              <input type="text" class="form-control" id="fullName" placeholder="Ваше имя">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Телефон*</label>
              <input type="tel" class="form-control" id="phone" placeholder="+380..." required>
            </div>
          </form>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn btn-primary" id="submitButtonTop">Узнать стоимость</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Мобильное приложение</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Осталось совсем немного и всё будет. Попробуйте немного позже.</div>
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
          <div class="col-md-6 order-xl-0 my-3 hero-section-left">
            <h1>Доставка из Китая в Украину авиа</h1>
            <h4>
              <span class="span-icon-before">
                <svg width="24" height="24" class="main-svg-icon">
                  <use href="./images/symbol-defs.svg#icon-clock"></use>
                </svg>
              </span>
              10-14 дней
            </h4>
            <div class="hero-search">
              <a href="#contact-form"><button type="button" class="btn btn-dark">Узнать тариф</button></a>
            </div>
          </div>
          <div class="col-md-6 order-xl-0 my-3 hero-section-right">
            <h1>Доставка из Китая в Украину морем</h1>
            <h4>
              <span class="span-icon-before">
                <svg width="24" height="24" class="main-svg-icon">
                  <use href="./images/symbol-defs.svg#icon-clock"></use>
                </svg>
              </span>
              65-70 дней
            </h4>
            <div class="hero-search">
              <a href="#contact-form"><button type="button" class="btn btn-dark">Узнать тариф</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--About Us-->
    <section class="about-us" id="aboutUs">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="section-title"><span>Почему выбирают именно нас?</span></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-6 about-us-img">
            <img src="./images/transport-logistics-products1.jpg" alt="">
          </div>
          <div class="col-6 list-advantages">
            <div class="advantages">
              <h4>Полный комплекс услуг</h4>
              <p>От поиска товара до доставки клиенту</p>
            </div>
            <div class="advantages">
              <h4>Собственные склады</h4>
              <p>Консолидация товарных партий</p>
              <p>Безопасное, бесплатное хранение</p>
            </div>
            <div class="advantages">
              <h4>Оптимальные цены</h4>
              <p>Гибкие условия, индивидуальный расчет</p>
            </div>
            <div class="advantages">
              <h4>Отслеживание груза</h4>
              <p>Возможность личного контроля за грузом 24/7</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section class="services" id="services">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="section-title"><span>Услуги транспортно-логистической компании Easy Cargo</span></h2>
          </div>
        </div>
        <div class="items">
          <div class="row">
            <div class="item-container col-lg-4 col-sm-6">
              <div class="item">
                <div class="services-img">
                  <img src="./images/business1.jpg" alt="">
                </div>
                <h3>Полное сопровождение бизнеса с Китаем</h3>
                <div class="overlay">
                  <p>Мы берем на себя всю бумажную работу, обеспечивая полный комплект необходимых документов для вашего бизнеса.</p>
                  <p>Упрощаем процесс прохождения таможни, гарантируя корректность документов и быстрое оформление.</p>
                  <p>Найдем надежных партнеров для вашего бизнеса, организуем переговоры и заключение контрактов.</p>
                </div>
              </div>
            </div>
            <div class="item-container col-lg-4 col-sm-6">
              <div class="item">
                <div class="services-img">
                  <img src="./images/search1.jpg" alt="">
                </div>
                <h3>Поиск товаров в Китае</h3>
                <div class="overlay">
                  <p>Мы найдем для вас лучших поставщиков и обеспечим контроль качества.</p>
                </div>
              </div>
            </div>
            <div class="item-container col-lg-4 col-sm-6">
              <div class="item">
                <div class="services-img">
                  <img src="./images/ship1.jpg" alt="">
                </div>
                <h3>Доставка морем и таможенное оформление</h3>
                <div class="overlay">
                  <p>Экономичный способ транспортировки крупных партий товаров из Китая.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="item-container col-lg-4 col-sm-6">
              <div class="item">
                <div class="services-img">
                  <img src="./images/airplane1.jpg" alt="">
                </div>
                <h3>Доставка авиа и таможенное оформление</h3>
                <div class="overlay">
                  <p>Быстрый и надежный вариант для срочных грузов.</p>
                </div>
              </div>
            </div>
            <div class="item-container col-lg-4 col-sm-6">
              <div class="item">
                <div class="services-img">
                  <img src="./images/pexels-dibert-11172101.jpg" alt="">
                </div>
                <h3>Доставка из Китая в Европу</h3>
                <div class="overlay">
                  <p>Услуга, созданная для бизнеса, который перенёс свои операции в Европу и нуждается в надёжной логистике. Мы обеспечиваем быстрые и безопасные поставки товаров напрямую из Китая с полным сопровождением на всех этапах транспортировки.</p>
                </div>
              </div>
            </div>
            <div class="item-container col-lg-4 col-sm-6">
              <div class="item">
                <div class="services-img">
                  <img src="./images/pexels-tomfisk-14271071.jpg" alt="">
                </div>
                <h3>Доставка сборных грузов (LCL)</h3>
                <div class="overlay">
                  <p>Это небольшие партии товаров от разных заказчиков, транспортируемые в одном контейнере. Данная услуга необходима предпринимателям, чья деятельность предполагает регулярную перевозку различных товаров небольшими партиями. Транспортировка сборных грузов позволяет привезти пробную партию для оценки экономической целесообразности работы с товаром или доставки образцов для проверки их качества, при этом расходы на доставку и таможенное оформление существенно ниже, чем при работе с большими объемами.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Collaboration process-->
    <section class="collaboration" id="collaboration">
      <div class="container collaboration-container">
        <div class="row">
          <div class="col-12">
            <h2 class="collaboration-title">Процесс сотрудничества с нами</h2>
          </div>
          <div class="collaboration-wrapper">
            <canvas id="canvas" width="780"></canvas>
          </div>
        </div>
        <div class="row collaboration-items">
          <div class="col-lg-2 col-sm-6 collaboration-item">
            <div class="icon-wrapper">
              <svg class="collaboration-icon">
                <use class="collaboration-icon" href="./images/icon-step.svg#icon-step1"></use>
              </svg>
            </div>
            <h3>Шаг 1</h3>
            <p>Вы оставляете заявку</p>
          </div>
          <div class="col-lg-2 col-sm-6 collaboration-item">
            <div class="icon-wrapper">
              <svg class="collaboration-icon">
                <use href="./images/icon-step.svg#icon-step2"></use>
              </svg>
            </div>
            <h3>Шаг 2</h3>
            <p>Согласуем сроки и тарифы. Оформляем документы</p>
          </div>
          <div class="col-lg-2 col-sm-6 collaboration-item">
            <div class="icon-wrapper">
              <svg class="collaboration-icon">
                <use href="./images/icon-step.svg#icon-step3"></use>
              </svg>
            </div>
            <h3>Шаг 3</h3>
            <p>Получаем груз на склад, сообщаем фактические параметры.</p>
          </div>
          <div class="col-lg-2 col-sm-6 collaboration-item">
            <div class="icon-wrapper">
              <svg class="collaboration-icon">
                <use href="./images/icon-step.svg#icon-step4"></use>
              </svg>
            </div>
            <h3>Шаг 4</h3>
            <p>Отправляем груз в Украину</p>
          </div>
          <div class="col-lg-2 col-sm-6 collaboration-item">
            <div class="icon-wrapper">
              <svg class="collaboration-icon">
                <use href="./images/icon-step.svg#icon-step5"></use>
              </svg>
            </div>
            <h3>Шаг 5</h3>
            <p>Оформляем груз</p>
          </div>
          <div class="col-lg-2 col-sm-6 collaboration-item">
            <div class="icon-wrapper">
              <svg class="collaboration-icon">
                <use href="./images/icon-step.svg#icon-step6"></use>
              </svg>
            </div>
            <h3>Шаг 6</h3>
            <p>Наш менеджер связывается с вами для передачи товара и оплаты доставки</p>
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



    <!-- FAQ section -->
    <section id="faq" class="faq-section section" data-bs-theme="dark">
      <div class="container">
        <h2 class="faq-title">Вопросы/ответы</h2>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Почему многие выбирают доставку морем?</button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
              <div class="accordion-body">
                Морские перевозки очень надежный вид доставки и при том недорогой. Морской транспорт не ограничивает грузы по весу и габаритам. Контейнеры с товаром пломбируют и опечатывают для сохранности содержимого.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Какие сроки доставки грузов из Китая в Украину морем?</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">В среднем процесс доставки контейнера в Украину составляет 55-70 дней.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Какие есть ограничения на ввоз товаров из Китая в Украину?</button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Законодательство Украины запрещает ввозить товары, которые могут нанести вред другим предметам, ценные растения, животных, антиквариат, драгоценные металлы, психотропные вещества, баллоны с жидкостью и газом, оружие и материалы, из
                которого оно может изготавливаться.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Какую информацию необходимо предоставить нам при отправке груза?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">При отправке груза необходимо дать нам упаковочный лист, он должен содержать информацию о содержимом каждой коробки, размеры и вес коробки</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Когда происходит оплата за доставленный груз?</button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">Оплата за доставку Вашего груза происходит в момент когда груз уже находится на нашем складе в Украине.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact form -->
    <section id="contact-form" class="contact-form-section section" data-bs-theme="dark">
      <div class="container">
        <div class="row d-flex justify-content-center gap-3">
          <div class="col-md-6 contacts-button">
            <h2>Наши контакты</h2>
            <div class="address d-flex gap-3 align-items-center mb-3">
              <h4>
                <spsn>
                  <i class="fa-solid fa-location-dot contact-form-icon"></i>
                  </span>
                  Одесса
              </h4>
            </div>
            <div class="email-contacts d-flex gap-3 align-items-center mb-3">
              <svg class="contact-form-icon">
                <use class="contact-form-icon" href="./images/icon-step.svg#icon-step1"></use>
              </svg>
              <a class="button-link" aria-current="page" href="mailto:Office@easycargo.ua">Office@easycargo.ua</a>
            </div>
            <h4 class="mb-3">
              <span class="span-icon-before">
                <svg width="24" height="24" class="contact-form-icon">
                  <use href="./images/symbol-defs.svg#icon-clock"></use>
                </svg>
              </span>
              24/7 Консультации
            </h4>
            <div class="d-flex align-items-center gap-3 mb-3">
              <svg width="16" height="16" class="contact-form-icon">
                <use href="./images/symbol-defs.svg#icon-phone"></use>
              </svg>
              <a class="button-link" aria-current="page" href="tel:+380987808008">+380987808008</a>
              <a class="nav-link" aria-current="page" href="https://wa.me/380987808008"><i class="fa-brands fa-whatsapp form-social-icon"></i></a>
              <a class="nav-link" aria-current="page" href="https://t.me/+380987808008"><i class="fa-brands fa-telegram form-social-icon"></i></a>
            </div>
            <div class="button-social-icons">
              <ul class="social-icons d-flex gap-3">
                <li><a href="https://www.instagram.com/easycargo.ua/">
                    <i class="fa-brands fa-instagram form-social-icon"></i>
                  </a></li>
                <li><a href="https://www.facebook.com/easycargoua">
                    <i class="fa-brands fa-facebook-f form-social-icon"></i>
                  </a></li>
                <li><a href="">
                    <i class="fa-brands fa-linkedin-in form-social-icon"></i>
                  </a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-5 form">
            <h2>Бесплатная консультация</h2>
            <p>Заполните форму, чтобы наш менеджер связался с Вами!</p>
            <form action="sendmail.php" method="post">
              <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Имя</label>
                <input type="text" class="form-control" id="exampleInputName1" name="exampleInputName1" />
              </div>
              <div class="mb-3">
                <label for="exampleInputPhone1" class="form-label">Телефон</label>
                <input type="text" class="form-control" id="exampleInputPhone1" name="exampleInputPhone1" />
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Электронная почта</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="exampleInputEmail1" />
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                <label class="form-check-label" for="exampleCheck1">Согласие на обработку данных, согласно политике конфиденциальности</label>
              </div>
              <button type="submit" class="btn btn-primary mb-3" id="submitButton" disabled>Оформить заявку</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!--warehouse-->
    <section class="warehouse">
      <div class="container warehouse-container">
        <div class="row">
          <div class="col-12">
            <h2 class="section-title"><span>Склад Easy Cargo (Foshan)</span></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 warehouse-img">
            <img src="./images/pexels-elevate-1267338.jpg" alt="Склад">
          </div>
          <div class="col-md-4">
            <div class="address-map mb-3">
              <h4>
                <span>
                  <i class="fa-solid fa-location-dot contact-form-icon"></i>
                </span>
                Address: No. 602, Longtai Industrial Building, No. 91 Suiyan Road, Nanhai District, Foshan city.
                北京市朝阳区龙泰工业大厦602仓库佛山市南海区随沿路91号
              </h4>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <svg width="16" height="16" class="contact-form-icon">
                <use href="./images/symbol-defs.svg#icon-phone"></use>
              </svg>
              <a class="button-link" aria-current="page" href="#">135 3335 3456</a>
            </div>
          </div>
          <div class="col-md-4 warehouse-map" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1060.573988330868!2d113.1414544701116!3d23.028830379639913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5YyX5Lqs5biC5pyd6Ziz5Yy66b6Z5rOw5bel5Lia5aSn5Y6mNjAy5LuT5bqT5L2b5bGx5biC5Y2X5rW35Yy66ZqP5rK_6LevOTHlj7c!5e0!3m2!1suk!2sua!4v1727784529264!5m2!1suk!2sua"
              width="414" height="276" style="border-radius: 9px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="container warehouse-container">
        <div class="row">
          <div class="col-12">
            <h2 class="section-title"><span>Склад Easy Cargo (Yiwu)</span></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 warehouse-img">
            <img src="./images/pexels-tiger-lily-4483610.jpg" alt="Склад">
          </div>
          <div class="col-md-4">
            <div class="address-map mb-3">
              <h4>
                <span>
                  <i class="fa-solid fa-location-dot contact-form-icon"></i>
                </span>
                Address: 1117 Yongjun Road, Yiwu City, Zhejiang Province
                1117号圣蝶公司院内丰通国际贸易有限公司 陈 18957992095
              </h4>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <svg width="16" height="16" class="contact-form-icon">
                <use href="./images/symbol-defs.svg#icon-phone"></use>
              </svg>
              <a class="button-link" aria-current="page" href="#">189 5799 2095</a>
            </div>
          </div>
          <div class="col-md-4 warehouse-map" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d888686.4463451261!2d119.66213882345507!3d29.532927725315282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x344956b0f0bd475d%3A0xd281c17b60d14fb0!2zWW9uZyBKdW4gTHUsIFpoZSBKaWFuZyBTaGVuZywg0JrQuNGC0LDQuQ!5e0!3m2!1suk!2sua!4v1727881276445!5m2!1suk!2sua"
              width="414" height="276" style="border-radius: 9px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer -->
  <footer>
    <p>Ⓒ EasyCargo 2023 All rights reserved</p>
  </footer>
  <script src="./js/canvas.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
  <script src="./js/main.js"></script>
  <script src="./js/logo-fixed.js"></script>
</body>

</html>