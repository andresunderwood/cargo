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
            <div class="header-top-phone d-flex align-items-center gap-1">
              <a class="nav-link" aria-current="page" href="https://wa.me/380987808008"><i class="fa-brands fa-whatsapp header-social-icon"></i></a>
              <a class="nav-link" aria-current="page" href="https://t.me/+380987808008"><i class="fa-brands fa-telegram header-social-icon"></i></a>
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
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#deliveryCalculationModal">Стоимость доставки</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Отследить</button> 
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
                <a class="nav-link" aria-current="page" href="#nearest-container">Главная</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#our-services">О нас</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#stages-work">Наши услуги</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faq">Условия приёма груза</a>
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
            <button type="button" class="btn btn-primary">Узнать стоимость</button>
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
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Узнать тариф</button>
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
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Узнать тариф</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Services -->
      <section class="services">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h2 class="section-title"><span>Услуги транспортно-логистической компании Easy Cargo</span></h2>
            </div>
          </div>  
          <div class="items">
            <div class="row">  
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="services-icons">
                    <i class="fa-solid fa-ship services-icon"></i>
                  </div>                  
                  <h3>Доставка морем</h3>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="services-icons">
                    <i class="fa-solid fa-plane services-icon"></i>
                  </div>
                  <h3>Доставка авиа</h3>
                </div>                    
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="services-icons">
                    <i class="fa-solid fa-magnifying-glass services-icon"></i>
                  </div>
                  <h3>Поиск товаров в Китае</h3>
                </div>                    
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="item">
                  <div class="services-icons">
                    <i class="fa-regular fa-file services-icon"></i>
                  </div>
                  <h3>Полное сопровождение</h3>
                </div>                    
              </div>
            </div>  
          </div>  
        </div>
       </section>

    <!--Collaboration process-->
      <section class="collaboration">
        <h2>Процесс сотрудничества с нами</h2>
        <div class="container my-5">
          <div class="row text-center align-items-center">
              <div class="col">
                  <div class="circle">Оставляете заявку</div>
              </div>
              <div class="col">
                  <div class="arrow">→</div>
              </div>
              <div class="col">
                  <div class="circle">Оговариваем тарифи и сроки</div>
              </div>
              <div class="col">
                  <div class="arrow">→</div>
              </div>
              <div class="col">
                  <div class="circle">Получаем груз на склад</div>
              </div>
              <div class="col">
                  <div class="arrow">→</div>
              </div>
              <div class="col">
                  <div class="circle">Отправляем груз в Украину</div>
              </div>
              <div class="col">
                  <div class="arrow">→</div>
              </div>
              <div class="col">
                  <div class="circle">Растаможиваем груз</div>
              </div>
              <div class="col">
                  <div class="arrow">→</div>
              </div>
              <div class="col">
                  <div class="circle">Передача товара, оплата за услуги</div>
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
            <h2>Отправляем 2-4 контейнера в месяц</h2>
            <h4 class="nearest-container-subtitle">Ближайший к отправке контейнер</h4>
            <div class="row nearest-container-row">
              <p>До отправки</p>
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
              <p>Уровень заполненности</p>
              <h5>
                <span class="span-icon-before">
                  <svg width="24" height="24" class="main-svg-icon">
                    <use href="./images/symbol-defs.svg#icon-pack"></use>
                  </svg>
                </span>
                <?php echo "$fullness%" ?>
              </h5>
            </div>
            <a href="#contact-form"><button type="button" class="btn btn-primary">Оставить заявку</button></a>
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
            <h2>Мы предлагаем</h2>
            <h4>Качественный сервис по доставке грузов из Китая в Украину</h4>
          </div>
          <div class="col-md-6 col-lg-4">
            <h3>
              <span class="span-icon-before">
                <svg width="24" height="24" class="main-svg-icon">
                  <use href="./images/symbol-defs.svg#icon-label"></use>
                </svg>
              </span>
              Фиксированный тариф
            </h3>
            <p>Тариф, согласованный с Вами при просчете, не меняется в процессе доставки</p>
            <h3>
              <span class="span-icon-before">
                <svg width="24" height="24" class="main-svg-icon">
                  <use href="./images/symbol-defs.svg#icon-workbook"></use>
                </svg>
              </span>
              Оформление документов
            </h3>
            <p>Наша компания берет на себя оформление всех необходимых документов, для того, чтобы Ваш бизнес имел первичные документы на груз</p>
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
            <p>Наша компания не работает с "брендовыми" товарами, а так же выполняет целый комплекс мер нацеленных на то, что бы Ваш груз прибывал вовремя</p>
            <h3>
              <span class="span-icon-before">
                <svg width="24" height="24" class="main-svg-icon">
                  <use href="./images/symbol-defs.svg#icon-car"></use>
                </svg>
              </span>
              Индивидуальный подход
            </h3>
            <p>Индивидуальный подход к решению нестандартных задач в доставке Вашего груза</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Stages of work -->
    <section id="stages-work" class="stages-work-section section" data-bs-theme="dark">
      <div class="container">
        <div class="row">
          <div class="col-md-5 my-3">
            <h2>Этапы работы</h2>
            <ul class="stages-work-list">
              <li>
                <div class="stages-work-list-item-thumb">
                  <span class="span-icon-before">
                    <svg width="24" height="24" class="main-svg-icon">
                      <use href="./images/symbol-defs.svg#icon-star2"></use>
                    </svg>
                  </span>
                  <h3>Оставляете заявку</h3>
                </div>
                <p>Заявку можно оформить заполнив форму на сайте или позвонив менеджеру</p>
              </li>
              <li>
                <div class="stages-work-list-item-thumb">
                  <span class="span-icon-before">
                    <svg width="24" height="24" class="main-svg-icon">
                      <use href="./images/symbol-defs.svg#icon-star2"></use>
                    </svg>
                  </span>
                  <h3>Получаете просчет, код клиента и адрес склада в Китае</h3>
                </div>
                <p>Поставщик маркируете все коробки Вашим индивидуальным кодом</p>
              </li>
              <li>
                <div class="stages-work-list-item-thumb">
                  <span class="span-icon-before">
                    <svg width="24" height="24" class="main-svg-icon">
                      <use href="./images/symbol-defs.svg#icon-star2"></use>
                    </svg>
                  </span>
                  <h3>Получаем Ваш груз на складе в Китае</h3>
                </div>
                <p>Прием, оформление и подготовка к отправке груза на нашем складе в Китае</p>
              </li>
              <li>
                <div class="stages-work-list-item-thumb">
                  <span class="span-icon-before">
                    <svg width="24" height="24" class="main-svg-icon">
                      <use href="./images/symbol-defs.svg#icon-star2"></use>
                    </svg>
                  </span>
                  <h3>Отправка контейнера</h3>
                </div>
                <p>Наша компания использует прямую линию доставки контейнера, что ускоряет процесс доставки Вашего груза</p>
              </li>
              <li>
                <div class="stages-work-list-item-thumb">
                  <span class="span-icon-before">
                    <svg width="24" height="24" class="main-svg-icon">
                      <use href="./images/symbol-defs.svg#icon-star2"></use>
                    </svg>
                  </span>
                  <h3>Получение груза в Украине</h3>
                </div>
                <p>Груз можно забрать с нашего склада в Одессе, либо мы согласуем доставку любой удобной вам почтовой службой</p>
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
        <h2>Вопросы/ответы</h2>
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
        <div class="row">
          <div class="col-md-5">
            <h2>Оформить заявку</h2>
            <p>Заполните форму, чтобы наш менеджер связался с Вами!</p>
            <form>
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
              <button type="submit" class="btn btn-primary" id="submitButton" disabled>Отправить заявку</button>
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