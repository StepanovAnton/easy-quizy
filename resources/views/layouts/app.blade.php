<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <title>Easy Quizee</title>
</head>
<body class="@yield('bodyClass')">
<header class="header" role="banner">
    @include('include.header.mobileMenu')
    @include('include.header.desktopMenu')
</header>

<main class="main" role="main">
    @yield('content')
</main>

<footer class="footer" role="contentinfo" style="background-image: url('{{ asset('images/footer-bg.jpg') }}');">
    @include('include.footer.top')
    @include('include.footer.bottom')
</footer>
@include('include.footer.mobileMenu')



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
