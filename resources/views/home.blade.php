@extends('layouts.app')

@section('bodyClass', 'page-main')
@section('content')
    <div class="intro" style="background-image: url('{{asset('/images/intro-bg-1.jpg')}}');">
        <div class="intro__inner">
            <div class="intro__info">
                <div class="intro__logo"></div>
                <p class="intro__text">интеллектуально-развлекательная битва</p>
                <a href="#!" class="button button--small intro__button ">
                    <span class="button__text">Записаться</span>
                </a>
            </div>
        </div>
        <div class="intro__shapes">
            <div class="shapes shapes--intro">
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
                <div class="shapes__shape"></div>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="coming">
            <div class="coming__top">
                <div class="heading">
                    <div class="heading__inner">
                        <h2 class="heading__title h1">Ближайшие игры</h2>
                        <a href="#!" class="heading__button">Полное расписание</a>
                    </div>
                </div>
            </div>
            <div class="coming__desktop" data-tabs-wrap="">
                <div class="coming__container">
                    <div class="coming__tabs">
                        <div class="slider-tabs">
                            <div class="slider-tabs__init swiper-container-horizontal" data-tab-slider="">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide slider-tabs__tab swiper-slide-active"
                                         style="width: 408px;">
                                        <div class="game-tab game-tab--pop game-tab--active" data-tab="tab-1"
                                             role="tab">
                                            <div class="game-tab__inner">
                                                <div class="game-tab__content">
                                                    <div class="game-tab__info">
                                                        <p class="game-tab__title">Вселенная DC</p>
                                                        <ul class="game-tab__list">
                                                            <li class="game-tab__item">Дорогая, я перезвоню</li>
                                                            <li class="game-tab__item">20 янв 2019 19:00</li>
                                                            <li class="game-tab__item">300 ₽</li>
                                                        </ul>
                                                    </div>
                                                    <div class="game-tab__line">
                                                        <span class="game-tab__type">Pop</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slider-tabs__tab swiper-slide-next" style="width: 408px;">
                                        <div class="game-tab" data-tab="tab-2" role="tab">
                                            <div class="game-tab__inner">
                                                <div class="game-tab__content">
                                                    <div class="game-tab__info">
                                                        <p class="game-tab__title">Easy Quizzy #23</p>
                                                        <ul class="game-tab__list">
                                                            <li class="game-tab__item">Дорогая, я перезвоню</li>
                                                            <li class="game-tab__item">23 янв 2019 19:00</li>
                                                            <li class="game-tab__item">300 ₽</li>
                                                        </ul>
                                                    </div>
                                                    <div class="game-tab__line">
                                                        <span class="game-tab__type">Classic</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slider-tabs__tab" style="width: 408px;">
                                        <div class="game-tab game-tab--pop" data-tab="tab-3" role="tab">
                                            <div class="game-tab__inner">
                                                <div class="game-tab__content">
                                                    <div class="game-tab__info">
                                                        <p class="game-tab__title">Гарри Поттер</p>
                                                        <ul class="game-tab__list">
                                                            <li class="game-tab__item">Дорогая, я перезвоню</li>
                                                            <li class="game-tab__item">28 янв 2019 19:00</li>
                                                            <li class="game-tab__item">300 ₽</li>
                                                        </ul>
                                                    </div>
                                                    <div class="game-tab__line">
                                                        <span class="game-tab__type">Pop</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <button type="button"
                                    class="slider-tabs__arrow slider-tabs__arrow--left slider-tabs__arrow--disable"
                                    tabindex="0" role="button" aria-label="Previous slide"
                                    aria-disabled="true"></button>
                            <button type="button"
                                    class="slider-tabs__arrow slider-tabs__arrow--right slider-tabs__arrow--disable"
                                    tabindex="0" role="button" aria-label="Next slide" aria-disabled="true"></button>
                        </div>
                    </div>
                    <div class="coming__content">
                        <div class="coming__block coming__block--active" data-block="tab-1">
                            <div class="event event--pop">
                                <div class="event__info">
                                    <div class="event__top">
                                        <div class="event__heading">
                                            <span class="event__label">Pop</span>
                                            <h3 class="event__title">Вселенная DC</h3>
                                        </div>
                                        <div class="event__access">Есть места</div>
                                    </div>
                                    <div class="event__body">
                                        <ul class="event__list">
                                            <li class="event__item">
                                                <p class="event__caption">20 января 2019</p>
                                                <p class="event__fact">19:00</p>
                                            </li>
                                            <li class="event__item">
                                                <p class="event__caption">Дорогая, я перезвоню</p>
                                                <p class="event__fact">Верхнеторговая площадь, 1</p>
                                            </li>
                                            <li class="event__item">
                                                <p class="event__caption">300 рублей</p>
                                                <p class="event__fact">только наличные</p>
                                            </li>
                                        </ul>
                                        <p class="event__desc">Easy Quizee Pop по Вселенной DC. Трубим сбор всех
                                            фанатов этой супергеройской вселенной! 7 раундов, 40 вопросов, 2
                                            часа игры.</p>
                                        <a href="#!" class="button">
                                            <span class="button__text">Записаться</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="event__map">
                                    <iframe
                                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A10e354beff62027a16b90bb1bdfdfbb7ecae446686fc4ea6192f8e7355f77c1c&amp;source=constructor"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="coming__block" data-block="tab-2">
                            <div class="event">
                                <div class="event__info">
                                    <div class="event__top">
                                        <div class="event__heading">
                                            <span class="event__label">Classic</span>
                                            <h3 class="event__title">Easy Quizzy #23</h3>
                                        </div>
                                        <div class="event__access">Есть места</div>
                                    </div>
                                    <div class="event__body">
                                        <ul class="event__list">
                                            <li class="event__item">
                                                <p class="event__caption">23 января 2019</p>
                                                <p class="event__fact">19:00</p>
                                            </li>
                                            <li class="event__item">
                                                <p class="event__caption">Дорогая, я перезвоню</p>
                                                <p class="event__fact">Верхнеторговая площадь, 1</p>
                                            </li>
                                            <li class="event__item">
                                                <p class="event__caption">300 рублей</p>
                                                <p class="event__fact">только наличные</p>
                                            </li>
                                        </ul>
                                        <p class="event__desc">Easy Quizee Pop по Вселенной DC. Трубим сбор всех
                                            фанатов этой супергеройской вселенной! 7 раундов, 40 вопросов, 2
                                            часа игры.</p>
                                        <a href="#!" class="button">
                                            <span class="button__text">Записаться</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="event__map">
                                    <iframe
                                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A10e354beff62027a16b90bb1bdfdfbb7ecae446686fc4ea6192f8e7355f77c1c&amp;source=constructor"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="coming__block" data-block="tab-3">
                            <div class="event event--pop">
                                <div class="event__info">
                                    <div class="event__top">
                                        <div class="event__heading">
                                            <span class="event__label">Pop</span>
                                            <h3 class="event__title">Гарри Поттер</h3>
                                        </div>
                                        <div class="event__access">Есть места</div>
                                    </div>
                                    <div class="event__body">
                                        <ul class="event__list">
                                            <li class="event__item">
                                                <p class="event__caption">28 января 2019</p>
                                                <p class="event__fact">19:00</p>
                                            </li>
                                            <li class="event__item">
                                                <p class="event__caption">Дорогая, я перезвоню</p>
                                                <p class="event__fact">Верхнеторговая площадь, 1</p>
                                            </li>
                                            <li class="event__item">
                                                <p class="event__caption">300 рублей</p>
                                                <p class="event__fact">только наличные</p>
                                            </li>
                                        </ul>
                                        <p class="event__desc">Easy Quizee Pop по Вселенной DC. Трубим сбор всех
                                            фанатов этой супергеройской вселенной! 7 раундов, 40 вопросов, 2
                                            часа игры.</p>
                                        <a href="#!" class="button">
                                            <span class="button__text">Записаться</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="event__map">
                                    <iframe
                                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A10e354beff62027a16b90bb1bdfdfbb7ecae446686fc4ea6192f8e7355f77c1c&amp;source=constructor"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coming__mobile">
                <div class="game-accordion coming__accordion">
                    <div class="game-accordion__ticket">
                        <div class="game-tab game-tab--pop">
                            <div class="game-tab__inner">
                                <div class="game-tab__content">
                                    <div class="game-tab__info">
                                        <p class="game-tab__title">Вселенная DC</p>
                                        <ul class="game-tab__list">
                                            <li class="game-tab__item">20 янв 2019 19:00</li>
                                            <li class="game-tab__item">Дорогая, я перезвоню</li>
                                            <li class="game-tab__item">300 ₽</li>
                                        </ul>
                                    </div>
                                    <div class="game-tab__line">
                                        <span class="game-tab__type">Pop</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="game-accordion__roll">
                        <div class="game-accordion__content">
                            <p class="game-accordion__desc">Easy Quizee Pop по Вселенной DC. Трубим сбор всех
                                фанатов этой супергеройской
                                вселенной! 7 раундов, 40 вопросов, 2 часа игры.</p>
                            <span class="game-accordion__access">Есть места</span>
                            <a href="#!" class="button">
                                <span class="button__text">Записаться</span>
                            </a>
                        </div>
                        <div class="game-accordion__bottom">
                            <div class="game-accordion__map">
                                <iframe
                                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A10e354beff62027a16b90bb1bdfdfbb7ecae446686fc4ea6192f8e7355f77c1c&amp;source=constructor"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="game-accordion coming__accordion">
                    <div class="game-accordion__ticket">
                        <div class="game-tab">
                            <div class="game-tab__inner">
                                <div class="game-tab__content">
                                    <div class="game-tab__info">
                                        <p class="game-tab__title">Easy Quizzy #23</p>
                                        <ul class="game-tab__list">
                                            <li class="game-tab__item">23 янв 2019 19:00</li>
                                            <li class="game-tab__item">Дорогая, я перезвоню</li>
                                            <li class="game-tab__item">300 ₽</li>
                                        </ul>
                                    </div>
                                    <div class="game-tab__line">
                                        <span class="game-tab__type">Classic</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="game-accordion__roll">
                        <div class="game-accordion__content">
                            <p class="game-accordion__desc">Easy Quizee Pop по Вселенной DC. Трубим сбор всех
                                фанатов этой супергеройской
                                вселенной! 7 раундов, 40 вопросов, 2 часа игры.</p>
                            <span class="game-accordion__access">Есть места</span>
                            <a href="#!" class="button">
                                <span class="button__text">Записаться</span>
                            </a>
                        </div>
                        <div class="game-accordion__bottom">
                            <div class="game-accordion__map">
                                <iframe
                                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A10e354beff62027a16b90bb1bdfdfbb7ecae446686fc4ea6192f8e7355f77c1c&amp;source=constructor"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="game-accordion coming__accordion">
                    <div class="game-accordion__ticket">
                        <div class="game-tab game-tab--pop">
                            <div class="game-tab__inner">
                                <div class="game-tab__content">
                                    <div class="game-tab__info">
                                        <p class="game-tab__title">Гарри Поттер</p>
                                        <ul class="game-tab__list">
                                            <li class="game-tab__item">28 янв 2019 19:00</li>
                                            <li class="game-tab__item">Дорогая, я перезвоню</li>
                                            <li class="game-tab__item">300 ₽</li>
                                        </ul>
                                    </div>
                                    <div class="game-tab__line">
                                        <span class="game-tab__type">Pop</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="game-accordion__roll">
                        <div class="game-accordion__content">
                            <p class="game-accordion__desc">Easy Quizee Pop по Вселенной DC. Трубим сбор всех
                                фанатов этой супергеройской
                                вселенной! 7 раундов, 40 вопросов, 2 часа игры.</p>
                            <span class="game-accordion__access">Есть места</span>
                            <a href="#!" class="button">
                                <span class="button__text">Записаться</span>
                            </a>
                        </div>
                        <div class="game-accordion__bottom">
                            <div class="game-accordion__map">
                                <iframe
                                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A10e354beff62027a16b90bb1bdfdfbb7ecae446686fc4ea6192f8e7355f77c1c&amp;source=constructor"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="info">
            <div class="info__inner">
                <div class="info__top">
                    <div class="heading heading--fit">
                        <div class="heading__inner">
                            <h2 class="heading__title h1">Что такое Easy Quizze?</h2>
                        </div>
                    </div>
                </div>
                <div class="info__block">
                    <div class="info__media">
                        <div class="video info__video" style="background-image: url({{asset('/images/video-bg.jpg')}});"
                             data-modal="modalVideo"></div>
                        <div class="info__frame frame frame--circle" data-frame="bottom-right">
                            <div class="frame__inner">
                                <p class="frame__text">Easy Quizee — это командная игра-викторина. У нас есть два
                                    подразделения: Easy Quizee Сlassic с вопросами обо всём, и Easy Quizee Pop -
                                    игры на
                                    определенную тему, связанную с современной поп-культурой.</p>
                            </div>
                            <div class="info__circle">
                                <button type="button" class="button-rules" data-modal="modalRules"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info__block">
                    <div class="info__points points">
                        <div class="points__item">
                            <div class="points__number">
                                <span class="points__caption">раундов</span>
                            </div>
                        </div>
                        <div class="points__item">
                            <div class="points__number">
                                <span class="points__caption">игроков в команде</span>
                            </div>
                        </div>
                        <div class="points__item">
                            <div class="points__number">
                                <span class="points__caption">часа игры</span>
                            </div>
                        </div>
                        <div class="points__item">
                            <div class="points__number">
                                <span class="points__caption">вопросов</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info__block">
                    <div class="info__question">
                        <p class="info__title h2">Пример вопроса</p>
                        <div class="info__wrap">
                            <div class="info__frame frame" data-frame="bottom-left">
                                <div class="frame__inner">
                                    <p class="frame__text">Угадайте фильм по кадру и цитате: «Ты всю жизнь ощущал,
                                        что мир не в порядке. Странная мысль, но её не отогнать. Она — как заноза в
                                        мозгу. Она сводит с ума, не даёт покоя. Это и привело тебя ко мне...»</p>
                                </div>
                            </div>
                            <div class="preview info__preview" data-frame="top-right">
                                <div class="preview__inner">
                                    <div class="preview__image"
                                         style="background-image: url('https://media.giphy.com/media/dJvmTja3RVS48/giphy.gif');"></div>
                                </div>
                            </div>
                        </div>
                        <div class="info__answer">
                            <button type="button" class="button info__button">
                                <span class="button__text">Посмотреть ответ</span>
                            </button>
                            <p class="info__text">Ответ на вопрос</p>
                        </div>
                    </div>
                </div>
                <div class="info__block">
                    <div class="info__gallery">
                        <p class="info__title h2">Фотоотчеты с игр</p>
                        <div class="info__slider">
                            <div class="slider-gallery swiper-container-fade swiper-container-horizontal">
                                <div class="swiper-wrapper" style="transition-duration: 0ms;">
                                    <div
                                        class="swiper-slide slider-gallery__slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next"
                                        data-swiper-slide-index="1"
                                        style="width: 996px; transition-duration: 0ms; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                        <div class="slider-gallery__image"
                                             style="background-image: url('{{asset('/images/slider-gallery-2.jpg')}}');"></div>
                                        <div class="slider-gallery__info">
                                            <div class="slider-gallery__desc">
                                                <p class="slider-gallery__title">Easy Quizzy Classic #21</p>
                                                <time class="slider-gallery__date" datetime="28.11.2018">
                                                    21/11/2018
                                                </time>
                                            </div>
                                            <div class="slider-gallery__detail">
                                                <p class="slider-gallery__caption">Смотреть все фото с игры:</p>
                                                <a href="#!" target="_blank" class="slider-gallery__link">Вконтакте</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide slider-gallery__slide swiper-slide-active"
                                         data-swiper-slide-index="0"
                                         style="width: 996px; transition-duration: 0ms; opacity: 1; transform: translate3d(-996px, 0px, 0px);">
                                        <div class="slider-gallery__image"
                                             style="background-image: url('{{asset('/images/slider-gallery-1.jpg')}}');"></div>
                                        <div class="slider-gallery__info">
                                            <div class="slider-gallery__desc">
                                                <p class="slider-gallery__title">Easy Quizzy Classic #22</p>
                                                <time class="slider-gallery__date" datetime="28.11.2018">
                                                    28/11/2018
                                                </time>
                                            </div>
                                            <div class="slider-gallery__detail">
                                                <p class="slider-gallery__caption">Смотреть все фото с игры:</p>
                                                <a href="#!" target="_blank" class="slider-gallery__link">Вконтакте</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-slide slider-gallery__slide swiper-slide-next swiper-slide-duplicate-prev"
                                        data-swiper-slide-index="1"
                                        style="width: 996px; transition-duration: 0ms; opacity: 0; transform: translate3d(-1992px, 0px, 0px);">
                                        <div class="slider-gallery__image"
                                             style="background-image: url('{{asset('/images/slider-gallery-2.jpg')}}');"></div>
                                        <div class="slider-gallery__info">
                                            <div class="slider-gallery__desc">
                                                <p class="slider-gallery__title">Easy Quizzy Classic #21</p>
                                                <time class="slider-gallery__date" datetime="28.11.2018">
                                                    21/11/2018
                                                </time>
                                            </div>
                                            <div class="slider-gallery__detail">
                                                <p class="slider-gallery__caption">Смотреть все фото с игры:</p>
                                                <a href="#!" target="_blank" class="slider-gallery__link">Вконтакте</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-slide slider-gallery__slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                        data-swiper-slide-index="0"
                                        style="width: 996px; transition-duration: 0ms; opacity: 0; transform: translate3d(-2988px, 0px, 0px);">
                                        <div class="slider-gallery__image"
                                             style="background-image: url('{{asset('/images/slider-gallery-1.jpg')}}');"></div>
                                        <div class="slider-gallery__info">
                                            <div class="slider-gallery__desc">
                                                <p class="slider-gallery__title">Easy Quizzy Classic #22</p>
                                                <time class="slider-gallery__date" datetime="28.11.2018">
                                                    28/11/2018
                                                </time>
                                            </div>
                                            <div class="slider-gallery__detail">
                                                <p class="slider-gallery__caption">Смотреть все фото с игры:</p>
                                                <a href="#!" target="_blank" class="slider-gallery__link">Вконтакте</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="slider-gallery__arrow slider-gallery__arrow--prev" tabindex="0"
                                        role="button" aria-label="Previous slide"></button>
                                <button class="slider-gallery__arrow slider-gallery__arrow--next" tabindex="0"
                                        role="button" aria-label="Next slide"></button>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info__shapes">
                <div class="shapes shapes--info">
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                    <div class="shapes__shape"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
