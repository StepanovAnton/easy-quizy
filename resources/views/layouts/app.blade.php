<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <title>Easy Quizee</title>
</head>
<body class="page-CLASS">
<header class="header" role="banner">
    <div class="header__desktop">
        <div class="header__top">
            <div class="header__inner">
                <div class="header__side">
                    <div class="header__dropdown">
                        <div class="dropdown-cities " style="visibility:hidden;width:0;">
                            <button type="button" class="dropdown-cities__button">Уфа</button>
                            <div class="dropdown-cities__roll">
                                <ul class="dropdown-cities__list">
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Владивосток</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Владимир</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Воронеж</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Екатеринбург</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Ижевск</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Иркутск</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Йошкар-Ола</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Казань</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Краснодар</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Москва</a>
                                    </li>
                                </ul>
                                <ul class="dropdown-cities__list">
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Набережные Челны</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Нижний Новгород</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Новосибирск</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Пермь</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Самара</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Санкт-Петербург</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Сочи</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Тюмень</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Уфа</a>
                                    </li>
                                    <li class="dropdown-cities__item">
                                        <a href="#!" class="dropdown-cities__link">Хабаровск</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="tel:+79373111125" class="header__link">+7 (937) 311-11-25</a>
                </div>
                <div class="header__auth">
                    <a href="/auth/" class="header__link">Вход</a>
                    <a href="/registration/" class="header__link">Регистрация</a>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="header__inner">
                <a href="/" class="header__logo"></a>
                <nav class="header__nav" role="navigation">
                    <ul class="header__menu" role="menu">
                        <li class="header__item" role="menuitem">
                            <a href="/shedule/" class="header__link">Расписание</a>
                        </li>
                        <li class="header__item" role="menuitem">
                            <a href="/rating/" class="header__link">Рейтинг команд</a>
                        </li>
                    </ul>
                    <a href="/shedule/" class="button button--small">
                        <span class="button__text">Записаться</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
    <div class="header__mobile">
        <div class="header__inner">
            <div class="header__side">
                <a href="/" class="header__logo"></a>
            </div>
            <button type="button" class="header__hamburger hamburger" data-menu-mobile>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
            </button>
        </div>
    </div>
</header>

<main class="main" role="main">

    @yield('content')
</main>

<footer class="footer" role="contentinfo" style="background-image: url('{{ asset('images/footer-bg.jpg') }}');">
    <div class="footer__top">
        <div class="footer__inner">
            <a href="/" class="footer__logo"></a>
            <div class="footer__side">
                <nav class="footer__nav" role="navigation">
                    <ul class="footer__list" role="menu">
                        <li class="footer__item" role="menuitem">
                            <a href="/shedule/" class="footer__link">Расписание</a>
                        </li>
                        <li class="footer__item" role="menuitem">
                            <a href="/rating/" class="footer__link">Рейтинг команд</a>
                        </li>
                        <li class="footer__item" role="menuitem">
                            <a href="/personal/" class="footer__link">Личный кабинет</a>
                        </li>
                    </ul>
                </nav>
                <div class="footer__links">
                    <a href="tel:+79373111125" class="footer__link">+7 (937) 311-11-25</a>
                    <a href="mailto:info@easy-quizee.ru"
                       class="footer__link footer__link--yellow">info@easy-quizee.ru</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer__inner">
            <div class="footer__social social">
                <a href="https://vk.com/easyquizee" target="_blank" class="social__item">
                    <svg viewBox="0 0 16 9" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.73222 8.59413C8.73222 8.59413 9.00174 8.56474 9.13978 8.4192C9.26614 8.28584 9.26176 8.0342 9.26176 8.0342C9.26176 8.0342 9.24496 6.85912 9.80078 6.68562C10.3486 6.51498 11.0519 7.82198 11.7984 8.32456C12.3623 8.70454 12.7903 8.62138 12.7903 8.62138L14.785 8.59413C14.785 8.59413 15.828 8.53104 15.3335 7.72591C15.2926 7.65995 15.045 7.13012 13.8508 6.0418C12.5996 4.90257 12.7676 5.08682 14.2737 3.11593C15.1911 1.91576 15.5577 1.18304 15.443 0.869732C15.3342 0.570047 14.6593 0.649629 14.6593 0.649629L12.4141 0.663251C12.4141 0.663251 12.2476 0.641025 12.1242 0.713437C12.0036 0.784415 11.9255 0.95003 11.9255 0.95003C11.9255 0.95003 11.5705 1.87848 11.0965 2.66855C10.0966 4.33474 9.69707 4.42293 9.53346 4.31969C9.15293 4.07807 9.24788 3.35037 9.24788 2.83345C9.24788 1.21817 9.49767 0.544954 8.76217 0.370736C8.51822 0.312663 8.33854 0.274665 7.71406 0.268212C6.91282 0.260326 6.23502 0.27108 5.85084 0.455336C5.5952 0.577934 5.39799 0.851808 5.51851 0.867581C5.66678 0.886939 6.00276 0.956482 6.18097 1.19451C6.41104 1.50208 6.40301 2.19178 6.40301 2.19178C6.40301 2.19178 6.53521 4.09313 6.09405 4.32901C5.79167 4.49104 5.37681 4.16052 4.48501 2.64848C4.02851 1.87418 3.68377 1.01814 3.68377 1.01814C3.68377 1.01814 3.6173 0.858261 3.49825 0.772227C3.35436 0.668269 3.15351 0.636007 3.15351 0.636007L1.02004 0.649629C1.02004 0.649629 0.699395 0.658232 0.581802 0.795169C0.477356 0.916333 0.573768 1.16798 0.573768 1.16798C0.573768 1.16798 2.24417 5.00437 4.13588 6.93798C5.87056 8.71028 7.83969 8.59413 7.83969 8.59413H8.73222Z"/>
                    </svg>
                </a>
                <a href="https://www.instagram.com/easyquizee/" target="_blank" class="social__item">
                    <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.3523 0H4.64775C2.08497 0 0 2.08497 0 4.64775V11.3523C0 13.915 2.08497 16 4.64775 16H11.3523C13.915 16 16 13.915 16 11.3523V4.64775C16 2.08497 13.915 0 11.3523 0ZM14.75 11.3523C14.75 13.2258 13.2258 14.75 11.3523 14.75H4.64775C2.77422 14.75 1.25 13.2258 1.25 11.3523V4.64775C1.25 2.77422 2.77422 1.25 4.64775 1.25H11.3523C13.2258 1.25 14.75 2.77422 14.75 4.64775V11.3523Z"/>
                        <path
                            d="M8 4C5.79438 4 4 5.79438 4 8C4 10.2056 5.79438 12 8 12C10.2056 12 12 10.2056 12 8C12 5.79438 10.2056 4 8 4ZM8 10.8406C6.43371 10.8406 5.15942 9.56629 5.15942 8C5.15942 6.43371 6.43371 5.15942 8 5.15942C9.56629 5.15942 10.8406 6.43371 10.8406 8C10.8406 9.56629 9.56629 10.8406 8 10.8406Z"/>
                        <path
                            d="M12 5C12.5523 5 13 4.55228 13 4C13 3.44772 12.5523 3 12 3C11.4477 3 11 3.44772 11 4C11 4.55228 11.4477 5 12 5Z"/>
                    </svg>
                </a>
                <a href="https://ru-ru.facebook.com/EasyQuizee/" target="_blank" class="social__item">
                    <svg viewBox="0 0 8 16" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.46028 15.2317V7.61496H7.56284L7.84147 4.99018H5.46028L5.46385 3.67646C5.46385 2.99188 5.5289 2.62507 6.51215 2.62507H7.82658V0H5.72373C3.19787 0 2.30883 1.2733 2.30883 3.41458V4.99048H0.734375V7.61525H2.30883V15.2317H5.46028Z"/>
                    </svg>
                </a>
            </div>
            <p class="footer__text">2019 © Easy Quizee | <a href="/privacy/" class="footer__creator">Политика
                    конфиденциальности</a></p>
            <p class="footer__text">Сайт разработан в digital-агентстве <a href="https://wptt.ru/" target="_blank"
                                                                           class="footer__creator">Вебпространство</a>
            </p>
        </div>
    </div>
</footer>

<div class="menu-mobile">
    <div class="menu-mobile__inner">
        <div class="menu-mobile__body">
            <ul class="menu-mobile__list">
                <li class="menu-mobile__item">
                    <a href="/personal/" class="menu-mobile__link">Личный кабинет</a>
                </li>
                <li class="menu-mobile__item">
                    <a href="/shedule/" class="menu-mobile__link">Расписание</a>
                </li>
                <li class="menu-mobile__item">
                    <a href="/rating/" class="menu-mobile__link">Рейтинг команд</a>
                </li>
                <li class="menu-mobile__item">
                    <a href="tel:+79373111125" class="menu-mobile__link menu-mobile__link--yellow">+7 (937)
                        311-11-25</a>
                </li>
            </ul>
            <a href="/shedule/" class="button button--small">
                <span class="button__text">Записаться</span>
            </a>
        </div>
    </div>
</div>


<div class="modal modal--rules" id="modalRules">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__block">
                <button type="button" class="modal__close" data-close></button>
                <div class="modal__frame">
                    <div class="modal__content">
                        <h2 class="modal__text"><b>Играй по правилам! 😉&nbsp;</b></h2>
                        <p class="modal__text">
                        </p>
                        <p class="modal__text">
                            <b>Количество&nbsp;</b><b>игроков в команде - от&nbsp;</b><b>2 до 9&nbsp;</b><b>человек.</b>
                        </p>
                        <b> </b>
                        <p>
                            <b><br>
                            </b>
                        </p>
                        <p>
                            <b>Регистрация на игру</b>
                        </p>
                        <p>
                            Зарегистрироваться на игру можно на сайте или в группе вконтакте.&nbsp;
                        </p>
                        <p>
                            Обязательно нужно указать номер телефона для связи и кол-во человек в команде (чем точнее -
                            тем лучше, от этого будет зависеть насколько комфортно вам будет за вашим столом).
                        </p>
                        <p>
                            <b><br>
                            </b>
                        </p>
                        <p>
                            <b>Продолжительность и ход игры</b>
                        </p>
                        <p>
                            Продолжительность игры - 2-2,5 часа. Каждая игра состоит из 7 раундов, в зависимости от темы
                            игры формат раундов может отличаться (мы стараемся быть оригинальными и делать нескучные
                            игры). Правила раундов и вопросы демонстрируются на экране, а также зачитываются ведущим. За
                            отведённое время (оно отличается по раундам) команды обдумывают свои ответы и вписывают их в
                            бланки. В зависимости от формата раунда, время отведённое для обсуждения вопроса может
                            отличаться. &nbsp;Ведущий озвучивает правильные ответы, и игра движется к следующему туру.
                        </p>
                        <p>
                            <b><br>
                            </b>
                        </p>
                        <p>
                            <b>Всё по-честному</b>
                        </p>
                        <p>
                            Во время игры мы убедительно просим не пользоваться мобильными устройствами и убрать их в
                            специально для этого предназначенный бокс, ну или в сумку/карман. Если мы увидим, что
                            участник пользуется телефоном, нам придётся вычесть баллы у команды.
                        </p>
                        <p>
                            <b><br>
                            </b>
                        </p>
                        <p>
                            <b>Чтобы не было обидно</b>
                        </p>
                        <p>
                            При равенстве очков в итоговой таблице отдельно взятой игры на более высокое место выходит
                            команда, занимающая в общем рейтинге более высокую позицию.&nbsp;
                        </p>
                        <p>
                            В случае, если для данной игры/команды рейтинг не предусмотрен, приоритет отдаётся команде,
                            имеющей бОльшее количество очков в последнем раунде (при равенстве - соответственно, в
                            предпоследнем и так далее).&nbsp;
                        </p>
                        <p>
                            При равенстве этих факторов, на более высокое место выходит команда, в составе которой в
                            данной игре было меньше участников.
                        </p>
                        <p>
                            <b><br>
                            </b>
                        </p>
                        <p>
                            <b>Наши призы и как ими пользоваться&nbsp; </b>
                        </p>
                        <b> </b>
                        <p>
                            За призовые места на каждой игре мы дарим сертификаты от бара «Дорогая, я перезвоню..,».
                            Сумма сертификатов на разных играх может отличаться. Данные сертификаты являются
                            собственностью бара, имеют собственные идентификационные номера. Использовать их можно со
                            следующего дня, до срока указанного на лицевой стороне, в качестве оплаты до 100% от суммы
                            счета.
                        </p>
                        <p>
                            Ещё на каждой игре любимый бар радует наших участников алкогольными призами и дымовыми
                            коктейлями. Данные ништяки команды получают как утешительные призы и могут воспользоваться
                            ими только здесь и сейчас, либо, в случае если не могут этого сделать, передарить другой
                            команде.
                        </p>
                        <p>
                            Сертификаты на участие в играх Easy Quizee (на кол-во персон или на команду). Здесь всё
                            просто, приди и отдай вместо денег. Но есть одно но, читай ниже)
                        </p>
                        <p>
                            <b><br>
                            </b>
                        </p>
                        <p>
                            <b>Цена вопроса</b>
                        </p>
                        <p>
                            Стоимость участия - 300₽ с человека. Оплата производится на месте перед игрой наличными или
                            путем перечисления на карту организатора.&nbsp;
                        </p>
                        <p>
                            <b><br>
                            </b>
                        </p>
                        <p>
                            <b>Или без денег&nbsp; </b>
                        </p>
                        <b> </b>
                        <p>
                            Мы часто проводим конкурсы вконтакте &nbsp;и делаем спец рассылки, так что несколько
                            счастливчиков на каждую игру попадают бесплатно, подписывайся и попадай в их число)
                        </p>
                        <p>
                            <br>
                        </p>
                        <p>
                            <b><span style="color: #ff0000;">На одну игру одна команда может воспользоваться только одним бонусом на проход</span></b>
                        </p>
                        <p>
                            <br>
                        </p>
                        <p>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal__underlay" data-close></div>
</div>


{{--main--}}
<div class="modal modal--video" id="modalVideo">
    <div class="modal__dialog">
        <div class="modal__block">
            <button type="button" class="modal__close" data-close></button>
            <div class="modal__frame">
                <div class="modal__player">
                    <iframe src="https://www.youtube.com/embed/v5jYgjy_1Fk?enablejsapi=1" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </div>
    <div class="modal__underlay" data-close></div>
</div>
{{--main--}}

<div class="modal modal--cities" id="modalCities">
    <div class="modal__dialog">
        <div class="modal__block">
            <button type="button" class="modal__close" data-close></button>
            <div class="modal__frame">
                <div class="modal__content">
                    <ul class="modal__list">
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Владивосток</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Владимир</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Воронеж</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Екатеринбург</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Ижевск</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Иркутск</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Йошкар-Ола</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Казань</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Краснодар</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Москва</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Набережные Челны</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Нажний Новгород</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Новосибирск</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Пермь</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Самара</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Санкт-Петербург</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Сочи</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Тюмень</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Уфа</a>
                        </li>
                        <li class="modal__item">
                            <a href="#!" class="modal__link">Хабаровск</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{--shedule--}}
<div class="modal modal--map" id="modalMap">
    <div class="modal__dialog">
        <div class="modal__block">
            <button type="button" class="modal__close" data-close></button>
            <div class="modal__frame" id="mapHere">

            </div>
        </div>
    </div>
    <div class="modal__underlay" data-close></div>
</div>
{{--shedule--}}

<div class="modal modal--adding" id="modalAdding">
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__block">
                <button type="button" class="modal__close" data-close></button>
                <div class="modal__frame">
                    <div class="modal__content">
                        <p class="modal__title">Добавить игрока</p>
                        <form class="form-adding">
                            <div class="form-adding__fields">
                                <div class="form-adding__field">
                                    <span class="form-adding__caption">Имя</span>
                                    <input id="modalAdding-firstName" required type="text" class="input"
                                           placeholder="Введите имя"/>
                                </div>
                                <div class="form-adding__field">
                                    <span class="form-adding__caption">Фамилия</span>
                                    <input id="modalAdding-secondName" required type="text" class="input"
                                           placeholder="Введите фамилию"/>
                                </div>
                            </div>
                            <div class="form-adding__buttons">
                                <button type="submit" class="button form-adding__button">
                                    <span class="button__text">Сохранить</span>
                                </button>
                                <button type="button" class="button button--outline form-adding__button" data-close>
                                    <span class="button__text">Отмена</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal__underlay" data-close></div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/main.js') }}" defer></script>

</body>

</html>
