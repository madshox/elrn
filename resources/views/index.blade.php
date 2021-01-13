<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Head -->
    <title>Разработка электронных курсов</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="keywords" content="Разработка электронных курсов для обучения персонала">
    <meta name="description" content="Разработка электронных курсов для обучения персонала">

    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('front/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" href="{{ asset('front/libs/animate.css-main/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/libs/font-awesome-5-pro/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/libs/bootstrap-4.5.3-dist/css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/css/swiper.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}">
</head>

<body>
<!-- Header -->
<header id="header">
    @if(session()->has('warning'))
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                        <strong>{{ session()->get('warning') }} <button class="btn btn-light" type="submit">Logout</button></strong>
                        </form>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="hamburger-menu">
        <div class="container">
            <div class="lang d-flex">
                <a href="#">O'zbek</a>
                <a href="#">English</a>
                <a href="#">Русский</a>
            </div>
        </div>
        <div class="container pt-5 h-100">
            <div class="row w-100">
                <div class="col-md-3 o-3 col-12 d-flex">
                    <div class="social">
                        <p>Мы в соцсетях</p>
                        <ul class="mt-4">
                            <li><a href="#"><i class="fab fa-facebook-f"> </i>
                                    Facebook</a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i>
                                    Instagram</a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i>
                                    Twitter</a></li>
                        </ul>
                    </div>
                    <div class="telephone">
                        <p>Позвоните нам</p>
                        <a href="tel:+998998771547" class="number">+998 99 8771547</a>
                    </div>
                </div>
                <div class="col-md-4 o-1 col-sm-6">
                    <p>Меню</p>
                    <ul class="mt-4">
                        <li><a href="#delivery-option">Варианты поставки</a></li>
                        <li><a href="#formats">Форматы разработки</a></li>
                        <li><a href="#courses">Тематика</a></li>
                        <li><a href="#methodical">Методические приемы</a></li>
                        <li><a href="#about">Технологии разработки</a></li>
                        <li><a href="#advantage">Преимущества</a></li>
                    </ul>
                </div>
                <div class="col-md-5 o-2 col-sm-6 ">
                    <p class="invisible">invisible</p>
                    <ul class="mt-4 ml-5">
                        <li><a href="#projects">Наши проекты</a></li>
                        <li><a href="#education">Анимация и видеоролики</a></li>
                        <li><a href="#process">Процесс разработки</a></li>
                        <li><a href="#cost">Цены</a></li>
                        <li><a href="#trust-us">Наши клиенты</a></li>
                        <li><a href="#review">Отзывы</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mynav">
            <nav class="my-navbar">
                <a class="navbar-brand pl-3" href="#header"><img src="{{ asset('front/img/logosvg.svg') }}" alt="logo" loading="lazy"></a>
                <ul class="nav ml-auto d-flex align-items-center">
                    <li class="dn"><a href="#order-form">Оставить заявку</a></li>
                    <li class="nav-icon1 d-flex align-items-center">
                        <a class="hide" href="#">меню</a>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
</header>


<main>

    <a class="button-up" id="upbutton" href="#" onclick="smoothJumpUp(); return false;">
        <i class="fa fa-arrow-up"></i>
    </a>


    <section class="intro">
        <div class="container">
            <h1>Разработка электронных курсов для обучения персонала </h1>
            <h5>Закажите комплект из трех электронных курсов и получите третий курс со скидкой 30%</h5>
            <div class="btn">
                <a href="#order-form">
                    <button class="button">Заказать курс</button>
                </a>
            </div>
        </div>
    </section>

    <section class="delivery-option" id="delivery-option">
        <div class="container">
            <div class="title d-flex">
                <h2>Варианты поставки<span class="empty">электронных курсов</span></h2>
            </div>
            <div class="block d-flex">
                <div class="icon mr-3">
                    <img src="img/icon1png-min.png" alt="">
                </div>
                <div class="text ml-3">
                    <h4>Уникальная разработка</h4>
                    <p class="">Мы разрабатываем курсы с уникальными концепциями, которые решают конкретную
                        учебную задачу. Курс полностью реализуем с нуля под ваши индивидуальные пожелания.</p>
                </div>
            </div>
            <div class="block d-flex">
                <div class="icon mr-3">
                    <img src="img/icon2-min.png" alt="">
                </div>
                <div class="text ml-3">
                    <h4>Готовые решения (коробочные курсы)</h4>
                    <p class="">Вы можете приобрести готовые курсы по востребованным общим темам. Это
                        позволит
                        вам:<br> • Сэкономить время на разработке и согласовании контента и дизайна;<br> • В
                        короткие сроки запустить обучение</p>
                </div>
            </div>
            <div class="block d-flex">
                <div class="icon mr-3">
                    <img src="img/icon3-min.png" alt="">
                </div>
                <div class="text ml-3">
                    <h4>Поточная разработка</h4>
                    <p class="">Мы предлагаем вам поточную разработку, когда нужно сделать много курсов по
                        однородной тематике в короткий срок. Курсы реализуются в едином дизайне,
                        методологическом
                        решении и шаблоне сборки. В этом случае стоимость каждого курса уменьшается.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="formats" id="formats">
        <div class="container">
            <h2 class="text-center py-4">Форматы разработки электронных курсов</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">

                    <a href="#formats">
                        <div class="card">
                            <img src="img/formats_icon1-min.png" alt="slide-course">
                            <h5>Слайдовые курсы</h5>

                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#formats">
                        <div class="card">
                            <img src="img/formats_icon2-min.png" alt="plot-course">
                            <h5>Сюжетные курсы</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#formats">
                        <div class="card">
                            <img src="img/formats_icon3-min.png" alt="">
                            <h5>Видеокурсы</h5>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#formats">
                        <div class="card">
                            <img src="img/formats_icon4-min.png" alt="slide-course">
                            <h5>Игровые тренажеры</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#formats">
                        <div class="card">
                            <img src="img/formats_icon5-min.png" alt="plot-course">
                            <h5>Бизнес-симуляторы</h5>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#formats">
                        <div class="card">
                            <img src="img/formats_icon6-min.png" alt="">
                            <h5>Одностраничные курсы</h5>
                        </div>
                    </a>
                </div>
            </div>
            <div class="btn d-flex justify-content-center py-5">
                <a href="#order-form">
                    <button class="button">Заказать курс</button>
                </a>
            </div>
        </div>
    </section>

    <section class="courses" id="courses">
        <div class="accordion-collapse">
            <div class="container">
                <h2 class="title">Тематика электронных курсов</h2>


                <div class="accordions" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <div class="mb-0">
                                <div class="text-left collapsed" data-toggle="collapse" data-target="#collapseOne"
                                     aria-expanded="false" aria-controls="collapseOne">
                                    <p class="header_title">Продуктовые курсы</p>
                                </div>
                            </div>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="text">В таких курсах систематизированы знания о различных процессах
                                    компании: согласование документов, поиск поставщиков,
                                    добыча и обработка сырья, производство и контроль качества продукции и другие
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <div class="mb-0">
                                <div class="text-left collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                     aria-expanded="false" aria-controls="collapseTwo">
                                    <p class="header_title">Курсы о процессах</p>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="text"> Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
                                    wolf
                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                    aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                    sustainable VHS.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="mb-0">
                                <div class="text-left collapsed" data-toggle="collapse" data-target="#collapseThree"
                                     aria-expanded="false" aria-controls="collapseThree">
                                    <p class="header_title">Адаптационные курсы</p>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="text"> Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
                                    wolf
                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                    aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                    sustainable VHS.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <div class="mb-0">
                                <div class="text-left collapsed" data-toggle="collapse" data-target="#collapseFour"
                                     aria-expanded="false" aria-controls="collapseFour">
                                    <p class="header_title">Курсы о навыках</p>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                             data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="text"> Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                    skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
                                    wolf
                                    moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                    butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                    aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                    sustainable VHS.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="methodical" id="methodical">
            <div class="container">
                <h2 class="text-center">Методические приемы в электронных курсах</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card d-flex">
                            <img src="img/methodical_icon1-min.png" alt="">
                            <h5>Иллюстрации и инфографика</h5>
                            <div class="hidden-text">
                                <p class="text">Проверочные задания вовлекают пользователя в учебный
                                    процесс и помогают закрепить полученные знания.
                                    Для эффективной отработки алгоритма действий
                                    мы воспроизводим реальные рабочие ситуации.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card d-flex">
                            <img src="img/methodical_icon2-min.png" alt="">
                            <h5>Анимация и скрайбинг</h5>
                            <div class="hidden-text">
                                <p class="text">Проверочные задания вовлекают пользователя в учебный
                                    процесс и помогают закрепить полученные знания.
                                    Для эффективной отработки алгоритма действий
                                    мы воспроизводим реальные рабочие ситуации.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-3 d-flex">
                            <img src="img/methodical_icon1-min.png" alt="">
                            <h5>Иллюстрации и инфографика</h5>
                            <div class="hidden-text">
                                <p class="text">Проверочные задания вовлекают пользователя в учебный
                                    процесс и помогают закрепить полученные знания.
                                    Для эффективной отработки алгоритма действий
                                    мы воспроизводим реальные рабочие ситуации.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card d-flex">
                            <img src="img/methodical_icon3-min.png" alt="">
                            <h5>Компоненты геймификации</h5>
                            <div class="hidden-text">
                                <p class="text">Проверочные задания вовлекают пользователя в учебный
                                    процесс и помогают закрепить полученные знания.
                                    Для эффективной отработки алгоритма действий
                                    мы воспроизводим реальные рабочие ситуации.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card d-flex">
                            <img src="img/methodical_icon4-min.png" alt="">
                            <h5>Траектории обучения</h5>
                            <div class="hidden-text">
                                <p class="text">Проверочные задания вовлекают пользователя в учебный
                                    процесс и помогают закрепить полученные знания.
                                    Для эффективной отработки алгоритма действий
                                    мы воспроизводим реальные рабочие ситуации.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card d-flex">
                            <img src="img/methodical_icon5-min.png" alt="">
                            <h5>Сторителлинг</h5>
                            <div class="hidden-text">
                                <p class="text">Проверочные задания вовлекают пользователя в учебный
                                    процесс и помогают закрепить полученные знания.
                                    Для эффективной отработки алгоритма действий
                                    мы воспроизводим реальные рабочие ситуации.</p>
                            </div>
                        </div>
                    </div>

                    <div class="btn pt-5">
                        <a href="#order-form">
                            <button class="button">Заказать курс</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container py-5">
            <h2 class="py-5">Технологии разработки</h2>
            <div class="row">
                <div class="col-lg-6 mb-3 t-scale animate__animated animate__backInLeft">
                    <div class="title">
                        <img src="img/development-animate.svg" alt="">
                        <h5>Средства разработки</h5>
                    </div>
                    <p>Мы разрабатываем курсы в формате SCORM и Tin Can API.
                        Собираем курсы в авторских средах Articulate Storyline,
                        CourseLab, iSpring Suite и в HTML5.
                        Для сложных проектов разрабатываем специальный
                        движок и административную часть.</p>
                </div>
                <div class="col-lg-6 mb-3 t-scale animate__animated animate__backInRight">
                    <div class="title">
                        <img src="img/operating-system-animate.svg" alt="">
                        <h5>Поддержка курса в СДО</h5>
                    </div>
                    <p>Наши курсы универсальны и работают практически во всех системах дистанционного обучения:
                        WebTutor, SAP SuccessFactors, Mirapolis LMS, ShareKnowledge, iSpring Online
                        и другие.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="advantage" id="advantage">
        <div class="container">
            <h2 class="pb-5">Преимущества наших курсов</h2>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-6 scale">
                    <img class="img" src="img/advantage_icon1-min.png" alt="">
                    <p>Уникальность</p>
                </div>
                <div class="col-lg-3 col-sm-6   col-6 scale">
                    <img class="img" src="img/advantage_icon2-min.png" alt="">
                    <p>Проработка материалов</p>
                </div>
                <div class="col-lg-3 col-sm-6   col-6 scale">
                    <img class="img" src="img/advantage_icon3-min.png" alt="">
                    <p>Экономия</p>
                </div>
                <div class="col-lg-3 col-sm-6   col-6 scale">
                    <img class="img" src="img/advantage_icon4-min.png" alt="">
                    <p>Адаптивный дизайн</p>
                </div>

            </div>
        </div>
    </div>

    <section class="projects" id="projects">
        <div class="favourite">
            <div class="container">
                <h2 class="my-5">Избранные проекты</h2>
                <div class="row">
                    <div class="col-lg-6 text">
                        <p>Pfizer</p>
                        <p> Разработка мобильного
                            приложения игры для
                            обучения ритейл представителей
                            компании</p>
                        <p>web, design, development</p>
                    </div>
                    <div class="col-lg-6 image">
                        <div class="text-hidden">
                            <span>view<br> case</span>
                        </div>
                        <img src="img/giffff-min.gif" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="education" id="education">
            <div class="container">
                <h2 class="py-5">Обучающие анимации и видеоролики</h2>
                <div class="row">
                    <div class="brdr col-md-6 pr-5 d-flex justify-content-center">
                        <img src="img/animation-animate.svg" alt="">
                        <p class="mt-3">Обучающий скрайбинг-ролик
                            для сотрудников <span>ВТБ Страхование жизни</span></p>
                    </div>
                    <div class="col-md-6 pl-5 d-flex justify-content-center">
                        <img src="img/bookmarks-animate.svg" alt="">
                        <p class="mt-3">Обучающий скрайбинг-ролик
                            для сотрудников <span>ВТБ Страхование жизни</span></p>
                    </div>
                    <div class="btn py-5">
                        <a href="#order-form">
                            <button class="button">Заказать курс</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="process" id="process">
        <div class="container">
            <h2 class="py-5">Процесс разработки электронных курсов</h2>
            <div class="row">
                <div class="col-md-6 col-12 hover">
                    <img src="img/process_img1-min.png" alt="">
                    <p class="">Получаем ваш запрос,
                        проводим анализ, изучаем имеющиеся материалы</p>
                </div>
                <div class="col-md-6 col-12 hover">
                    <img src="img/process_img2-min.png" alt="">
                    <p class="">Выбираем концепцию, разрабатываем сценарий
                        курсов</p>
                </div>
                <div class="col-md-6 col-12 hover">
                    <img src="img/process_img3-min.png" alt="">
                    <p class="">Разрабатываем дизайн
                        и иллюстрации на основе
                        сценария</p>
                </div>
                <div class="col-md-6 col-12 hover">
                    <img src="img/process_img4-min.png" alt="">
                    <p class="">Собираем курсы, проводим
                        тестирование
                        и отладку</p>
                </div>
                <div class="col-md-6 col-12 hover">
                    <img src="img/process_img5-min.png" alt="">
                    <p class="">Публикуем курсы на
                        вашем сайте или в системе
                        дистанционного обучения.</p>
                </div>
                <div class="col-md-6 col-12 hover">
                    <img src="img/process_img6-min.png" alt="">
                    <p class="">Обеспечиваем
                        техническую
                        поддержку курсов.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cost" id="cost">
        <div class="container">
            <h2 class="py-5">Стоимость электронных курсов</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-md-4 mb-4">
                    <div class="box">
                        <div class="content">
                            <h5>Слайдовый курс</h5>
                            <p class="date">До 50 экранов</p>
                            <p class="description">Интерактивный курс с форматом подачи материалов в контексте
                                истории.
                            </p>
                        </div>
                        <p class="price">от 14 355 000 сум</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-md-4 mb-4">
                    <div class="box">
                        <div class="content">
                            <h5>Видеокурс</h5>
                            <p class="date">До 30 экранов</p>
                            <p class="description">Обучающий курс в формате видео-лекции: транслятор информации –
                                преподаватель, его речь сопровождается тезисами и элементами инфографики.</p>
                        </div>
                        <p class="price">от 4 350 000 сум</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-md-4 mb-4">
                    <div class="box">
                        <div class="content">
                            <h5>Одностраничный курс</h5>
                            <p class="date">До 20 экранов</p>
                            <p class="description">Обучающий курс в формате html-страницы с сюжетной линией.</p>
                        </div>
                        <p class="price">от 28 855 000 сум</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-sm-3 mb-4">
                    <div class="box">
                        <div class="content">
                            <h5>Игровой тренажер</h5>
                            <p class="date">До 20 кейсов</p>
                            <p class="description">Диалоговый тренажер на отработку навыка продаж.</p>
                        </div>
                        <div class="price1">
                            <p class="price">от 43 355 000 сум</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-sm-3 mb-4">
                    <div class="box">
                        <div class="content">
                            <h5>Бизнес-симулятор</h5>
                            <p class="date">До 30 экранов</p>
                            <p class="description">Разработка административной части, вариативных сценариев развития
                                ситуаций, матмодели и игровой модели, визуализация ситуаций, построение отчетов и
                                прочее.</p>
                        </div>
                        <p class="price">от 57 855 000 сум</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-xs-3 mb-4">
                    <div class="box">
                        <div class="content">
                            <p class="description">Стоимость курса зависит от качества и объема ваших исходных
                                материалов, выбранного формата
                                реализации, сложности технических и визуальных решений.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order py-5">
                <h3 class="pb-4">Чтобы рассчитать стоимость решения вашей задачи,
                    позвоните нам или оставьте заявку.</h3>
                <div class="btn">
                    <a href="#order-form">
                        <button class="button mt-5">Заказать электронный курс</button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="trust-us" id="trust-us">
        <div class="container py-5">
            <h2 class="py-5">Нам доверяют</h2>
            <div class="row align-items-center">
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(1)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(2)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(3)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(4)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(5)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(6)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(7)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(8)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(9)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(10)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(11)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(12)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(13)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(14)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(15)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(16)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(17)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(18)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(19)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(20)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(21)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(22)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(23)-min.png" alt=""></div>
                <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="img/trust-us(24)-min.png" alt=""></div>
            </div>
        </div>
    </section>

    <section class="review" id="review">
        <div class="container">
            <h2 class="pt-5 pb-3">Отзывы</h2>

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide d-flex">
                        <div class="about1">
                            <div class="image">
                                <img src="img/review_logo-min.png" alt="logo">
                            </div>
                            <div class="name">
                                <h5>Скляров Максим Сергеевич</h5>
                                <p class="work">Генеральный директор ООО «Хэдхантер»</p>
                            </div>
                        </div>
                        <div class="content">
                            <p>Общество с ограниченной ответственностью «Хэдхантер» благодарит компанию «Lern.uz» за
                                успешную разработку
                                электронного курса для обучения новых сотрудников нашей компании. Уже первые
                                результаты прохождения
                                сотрудниками электронного курса показали существенное ускорение сроков адаптации и
                                набора уровня знаний
                                необходимого для эффективного взаимодействия с клиентами по расчету пакетов услуг и
                                подбора оптимальных
                                решений для типовых и нестандартных задач.</p>
                        </div>
                    </div>
                    <div class="swiper-slide d-flex">
                        <div class="about1">
                            <div class="image">
                                <img src="img/review_logo-min.png" alt="logo">
                            </div>
                            <div class="name">
                                <h5>Скляров Максим Сергеевич</h5>
                                <p class="work">Генеральный директор ООО «Хэдхантер»</p>
                            </div>
                        </div>
                        <div class="content">
                            <p>Общество с ограниченной ответственностью «Хэдхантер» благодарит компанию «Lern.uz» за
                                успешную разработку
                                электронного курса для обучения новых сотрудников нашей компании. Уже первые
                                результаты прохождения
                                сотрудниками электронного курса показали существенное ускорение сроков адаптации и
                                набора уровня знаний
                                необходимого для эффективного взаимодействия с клиентами по расчету пакетов услуг и
                                подбора оптимальных
                                решений для типовых и нестандартных задач.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                    <div class="swiper-slide">Slide 10</div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
            </div>


        </div>
    </section>


    <section class="order-form" id="order-form">
        <div class="container">
            <h2>Форма заказа электронного курса</h2>
            <h4 class="py-3">Закажите электронный курс и получите концепцию и прототип дизайна вашего курса
                бесплатно</h4>
            <form action="#order-form">
                <div class="form mt-5">
                    <input class="text p-3 mb-3" type="text" id="name" placeholder="Ваше имя" required="">
                    <input class="number p-3 mb-5" type="tel" id="tel" placeholder="Телефон" required="">
                    <button class="button my-5" type="submit" data-toggle="modal" data-target="#exampleModal">Отправить
                        заявку
                    </button>
                </div>
            </form>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ваша заявка успешно отправлена</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Наши операторы свяжутся с Вами</p>
                        </div>
                        <div class="modal-footer">

                            <button class="btn btn-success" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contacts my-5">
                    <p class="social-number mb-3"><a href="tel:+998998771547">+998 99 877-15-47</a></p>
                    <p>г. Ташкент, ул. Мукумий, дом 34
                        Ориентир: Спорт товар, оптовый рынок</p>
                    <p class="mt-5">Umbrella Soft © 2009-2020</p>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-5">
                <div class="row h-100">
                    <div class="col-lg-6 col-12">
                        <a href="#" class="face">
                            <p class="social-number">Facebook</p>
                        </a>
                        <a href="#" class="mail">
                            <p class="social-number ">info@usoft.uz</p>
                        </a>
                    </div>
                    <div class="col-lg-6 col-12">
                        <a href="#" class="insta">
                            <p class="social-number inst">Instagram</p>
                        </a>
                        <a href="#" class="twit">
                            <p class="social-number ">Twitter</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer, scripts and modals -->

<!-- Vendor -->
<script defer="" src="{{ asset('front/libs/jquery-3.5.1/jquery-3.5.1.min.js') }}"></script>
<script defer="" src="{{ asset('front/libs/bootstrap-4.5.3-dist/js/bootstrap.min.js') }}"></script>
<script defer="" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- My scripts -->
<script defer="" src="{{ asset('front/js/main.min.js') }}"></script>


</body>

</html>
