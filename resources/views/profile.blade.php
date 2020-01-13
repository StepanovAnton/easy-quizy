@extends('layouts.app')

@section('content')
    <div class="wrap">
        <div class="profile">
            <div class="profile__top">
                <div class="heading">
                    <div class="heading__inner">
                        <h1 class="heading__title">Личный кабинет</h1>
                    </div>
                </div>
            </div>
            <div class="profile__block">
                <div class="profile__side">
                    <div class="profile-side">
                        <div class="profile-side__top">
                            <div class="profile-side__avatar">
                                <img src="/images/icon-header-user.svg"
                                     class="profile-side__img" alt="avatar">
                            </div>
                        </div>
                        <div class="profile-side__body">
                            <div class="profile-side__info">
                                <p class="profile-side__name">{{Auth::user()->firstName }} {{ Auth::user()->lastName }}</p>
                                <p class="profile-side__contact">{{Auth::user()->email }}</p>
                                <p class="profile-side__contact">{{Auth::user()->phoneNumber }}</p>
                            </div>
                            <a href="/personal/redaktirovat/" class="button button--fit">
                                <span class="button__text">Редактировать</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile__base">
                    <div class="profile__board">
                        <div class="board" data-rank="1">
                            <div class="board__inner">
                                <div class="board__heading">
                                    <p class="board__name">Название команды</p>
                                    <p class="board__status">{{$team->name}}</p>
                                </div>
                                <div class="board__stats">
                                    <div class="board__stat">
                                        <div class="board__item">
                                            <p class="board__point"> 3</p>
                                            <p class="board__caption">игр</p>
                                        </div>
                                    </div>
                                    <div class="board__stat">
                                        <div class="board__item">
                                            <p class="board__point">100</p>
                                            <p class="board__caption">баллов</p>
                                        </div>
                                    </div>
                                    <div class="board__stat">
                                        <div class="board__item">
                                            <p class="board__point">1</p>
                                            <p class="board__caption">место</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile__team">
                        <form class="team">
                            <div class="team__heading">
                                <p class="team__title">Состав</p>
                            </div>
                            <button type="button" class="team__collapse">Состав</button>
                            <div class="team__list">
                                @foreach($users as $user)
                                    <div class="team__item" tabindex="0">

                                        <div class="team__player">
                                            <p class="team__name">{{$user->firstName . ' ' . $user->lastName}}</p>
                                        </div>
                                        @if(\Auth::User()->teamOwner() === true)
                                            <div class="team__options">
                                                <button class="team__dots" type="button"></button>
                                                <div class="team__plank">
                                                    <button type="submit" class="team__option">Удалить</button>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                                @foreach($externalUsers as $externalUser)
                                    <div class="team__item" tabindex="0">

                                        <div class="team__player">
                                            <p class="team__name">{{$externalUser->name . ' ' . $externalUser->surname}}</p>
                                        </div>
                                        @if(\Auth::User()->teamOwner() === true)
                                            <div class="team__options">
                                                <button class="team__dots" type="button"></button>
                                                <div class="team__plank">
                                                    <button type="button" class="team__option" data-modal="modalAdding">
                                                        Редактировать
                                                    </button>
                                                    <button type="submit" class="team__option">Удалить</button>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                                @if(\Auth::User()->teamOwner() === true)
                                    <button
                                        type="button"
                                        class="team__add"
                                        data-modal="modalAdding">
                                        Добавить игрока
                                    </button>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="profile__block">
                <div class="profile__base">
                    <div class="profile__games">
                        <div class="team__games">
                            <div class="table-games">
                                <div class="table-games__heading">
                                    <div class="table-games__col">
                                        <p class="table-games__text">Игра</p>
                                    </div>
                                    <div class="table-games__col">
                                        <p class="table-games__text">Дата</p>
                                    </div>
                                    <div class="table-games__col">
                                        <p class="table-games__text">Место</p>
                                    </div>
                                    <div class="table-games__col">
                                        <p class="table-games__text">Баллы</p>
                                    </div>
                                </div>
                                <div class="table-games__collapse">Статистика</div>
                                <div class="table-games__list">

                                    <div class="table-games__row">
                                        <div class="table-games__col">
                                            <p class="table-games__text">Имя</p>
                                        </div>
                                        <div class="table-games__col">
                                            <time class="table-games__date"
                                                  datetime="29.12.2018">Дата
                                            </time>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">Плейс</p>
                                            <span class="table-games__caption">место</span>
                                        </div>
                                        <div class="table-games__col">
                                            <p class="table-games__number">Пойнтс</p>
                                            <span class="table-games__caption">баллы</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
