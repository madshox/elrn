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
                            <strong>{{ session()->get('warning') }}
                                <button class="btn btn-light" type="submit">Logout</button>
                            </strong>
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
                <a class="navbar-brand pl-3" href="#header"><img src="{{ asset('front/img/logosvg.svg') }}" alt="logo"
                                                                 loading="lazy"></a>
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
    @if( ! $variants->isEmpty() )
        <section class="delivery-option" id="delivery-option">
            <div class="container">
                <div class="title d-flex">
                    <h2>Варианты поставки<span class="empty">электронных курсов</span></h2>
                </div>
                @foreach($variants as $variant)
                    <div class="block d-flex">
                        <div class="icon mr-3">
                            <img src="{{ Storage::url($variant->image) }}" alt="">
                        </div>
                        <div class="text ml-3">
                            {!! $variant->text() !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    @if( ! $formats->isEmpty() )
        <section class="formats" id="formats">
            <div class="container">
                <h2 class="text-center py-4">Форматы разработки электронных курсов</h2>
                <div class="row">
                    @foreach($formats as $format)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="#formats">
                                <div class="card">
                                    <img src="{{ Storage::url($format->image) }}" alt="slide-course">
                                    <h5>{{ $format->name() }}</h5>

                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="btn d-flex justify-content-center py-5">
                    <a href="#order-form">
                        <button class="button">Заказать курс</button>
                    </a>
                </div>
            </div>
        </section>
    @endif

    <section class="courses" id="courses">
        @if( ! $themes->isEmpty() )
            <div class="accordion-collapse">
                <div class="container">
                    <h2 class="title">Тематика электронных курсов</h2>

                    <div class="accordions" id="accordionExample">
                        @foreach($themes as $key => $theme)
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div class="mb-0">
                                        <div class="text-left collapsed" data-toggle="collapse"
                                             data-target="#collapse{{ $key }}"
                                             aria-expanded="false" aria-controls="collapse{{ $key }}">
                                            <p class="header_title">{{ $theme->name() }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div id="collapse{{ $key }}" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="text">{{ strip_tags($theme->description()) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if( ! $methods->isEmpty() )
            <div class="methodical" id="methodical">
                <div class="container">
                    <h2 class="text-center">Методические приемы в электронных курсах</h2>
                    <div class="row">
                        @foreach($methods as $method)
                            <div class="col-lg-6">
                                <div class="card d-flex">
                                    <img src="{{ Storage::url($method->image) }}" alt="">
                                    <h5>{{ $method->name() }}</h5>
                                    <div class="hidden-text">
                                        <p class="text">{{ strip_tags($method->description()) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="btn pt-5">
                            <a href="#order-form">
                                <button class="button">Заказать курс</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </section>

    @if( ! $technologies->isEmpty() )
        <section class="about" id="about">
            <div class="container py-5">
                <h2 class="py-5">Технологии разработки</h2>
                <div class="row">
                    @foreach($technologies as $technology)
                        <div class="col-lg-6 mb-3 t-scale animate__animated animate__backInLeft">
                            <div class="title">
                                <img src="{{ Storage::url($technology->image) }}" alt="">
                                <h5>{{ $technology->name() }}</h5>
                            </div>
                            <p>{!! $technology->description() !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if( ! $benefits->isEmpty() )
        <div class="advantage" id="advantage">
            <div class="container">
                <h2 class="pb-5">Преимущества наших курсов</h2>
                <div class="row">
                    @foreach($benefits as $benefit)
                        <div class="col-lg-3 col-sm-6 col-6 scale">
                            <img class="img" src="{{ Storage::url($benefit->image) }}" alt="">
                            <p>{{ $benefit->name() }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

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

    @if( ! $benefits->isEmpty() )
        <section class="process" id="process">
            <div class="container">
                <h2 class="py-5">Процесс разработки электронных курсов</h2>
                <div class="row">
                    @foreach($processes as $process)
                        <div class="col-md-6 col-12 hover">
                            <img src="{{ Storage::url($process->image) }}" alt="">
                            <p class="">{!! $process->description() !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if( ! $costs->isEmpty() )
        <section class="cost" id="cost">
            <div class="container">
                <h2 class="py-5">Стоимость электронных курсов</h2>
                <div class="row">
                    @foreach($costs as $cost)
                        <div class="col-lg-4 col-md-6 col-12 mb-md-4 mb-4">
                            <div class="box">
                                <div class="content">
                                    {!! $cost->description() !!}
                                </div>
                                <p class="price">{{ $cost->name() }}</p>
                            </div>
                        </div>
                    @endforeach
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
    @endif

    @if( ! $brends->isEmpty() )
        <section class="trust-us" id="trust-us">
            <div class="container py-5">
                <h2 class="py-5">Нам доверяют</h2>
                @foreach($brends as $brend)
                    <div class="row align-items-center">
                        <div class="col-md-2 col-sm-3 col-4 pb-3 "><img src="{{ Storage::url($brend->image) }}" alt="">
                        </div>

                    </div>
                @endforeach
            </div>
        </section>
    @endif

    @if( ! $comments->isEmpty() )
        <section class="review" id="review">
            <div class="container">
                <h2 class="pt-5 pb-3">Отзывы</h2>

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($comments as $comment)
                            <div class="swiper-slide d-flex">
                                <div class="about1">
                                    <div class="image">
                                        <img src="{{ Storage::url($comment->image) }}" alt="logo">
                                    </div>
                                    <div class="name">
                                        <h5>{{ $comment->name() }}</h5>
                                        <p class="work">{{ $comment->position() }}</p>
                                    </div>
                                </div>
                                <div class="content">
                                    {!! $comment->description() !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
                    <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
                </div>
            </div>
        </section>
    @endif


    <section class="order-form" id="order-form">
        <a href="#order-form" id="btn_go_to"></a>
        <div class="container">
            <h2>Форма заказа электронного курса</h2>
            <h4 class="py-3">Закажите электронный курс и получите концепцию и прототип дизайна вашего курса
                бесплатно</h4>
            <form class="my-form" action="{{ route('get_order') }}" method="POST">
                @csrf
                @error('name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                @error('phone')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror
                <div class="form mt-5">
                    <input class="text p-3 mb-3" id="name" placeholder="Ваше имя" name="name" value="{{ old('name') }}"
                           required>
                    <input class="number p-3 mb-5" id="tel" placeholder="Телефон" name="phone"
                           value="{{ old('phone') }}" required>
                    <button class="button my-5" type="submit">Заказать курс</button>
                </div>
            </form>

            {{--Sucess-Modal--}}
            <div id="success" class="modal fade">
                <div class="modal-dialog modal-confirm">
                    <div class="modal-content">
                        <div class="modal-header justify-content-center">
                            <div class="icon-box">
                                <i class="material-icons">&#xE876;</i>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body text-center">
                            <h4>Great!</h4>
                            <p>Your account has been created successfully.</p>
                            <button class="btn btn-success" data-dismiss="modal"><span>Start Exploring</span> <i
                                    class="material-icons">&#xE5C8;</i></button>
                        </div>
                    </div>
                </div>
            </div>
            {{--end-modal--}}

            {{--            <div class="col-sm-12" id="success">--}}
            {{--                <div class="alert  alert-danger alert-dismissible fade show" role="alert">--}}
            {{--                    $error--}}
            {{--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
            {{--                        <span aria-hidden="true">&times;</span>--}}
            {{--                    </button>--}}
            {{--                </div>--}}
            {{--            </div>--}}

        </div>
    </section>

</main>

<footer id="footer">
    <div class="container">
        <div class="row">
            @foreach($abouts as $about)
                <div class="col-md-4">
                    <div class="contacts my-5">
                        <p class="social-number mb-3"><a href="tel:{{ $about->number }}">{{ $about->number }}</a></p>
                        {!! $about->description() !!}
                        <p class="mt-5">Umbrella Soft © 2009-2020</p>
                    </div>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-5">
                    <div class="row h-100">
                        <div class="col-lg-6 col-12">
                            <a href="{{ $about->f_link }}" class="face">
                                <p class="social-number">Facebook</p>
                            </a>
                            <a href="{{ $about->mail_link }}" class="mail">
                                <p class="social-number ">info@usoft.uz</p>
                            </a>
                        </div>
                        <div class="col-lg-6 col-12">
                            <a href="{{ $about->i_link }}" class="insta">
                                <p class="social-number inst">Instagram</p>
                            </a>
                            <a href="{{ $about->t_link }}" class="twit">
                                <p class="social-number ">Twitter</p>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
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

<script>
    @if(session('success'))
    $(function () {
        $('#success').modal('show')
    })
    @endif

    @if ($errors->any())
        window.onload = function () {
        document.getElementById("btn_go_to").click();
    };
    @endif
</script>

</body>

</html>
