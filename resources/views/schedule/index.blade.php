@section('bodyClass', 'page-purple')
@extends('layouts.app')

@section('content')
    <div class="wrap">
        <div class="schedule">
            <div class="schedule__inner">
                <div class="schedule__top">
                    <div class="heading heading--fit">
                        <div class="heading__inner">
                            <h1 class="heading__title">Расписание игр</h1>
                        </div>
                    </div>
                </div>
                <div class="schedule__cards">
                    @foreach ($gamesList as $game)
                        <div class="schedule__card">
                            <div class="card-game {{$game->label === 'classic' ? '' : 'card-game--pop'}}">
                                <div class="card-game__shell">
                                    <div class="card-game__inner">
                                        <div class="card-game__content">
                                            <time class="card-game__date"
                                                  datetime="">
                                            </time>
                                            <p class="card-game__title">{{$game->name}}</p>
                                            <div class="card-game__list">
                                                <div class="card-game__item">
                                                    <p class="card-game__caption">{{$game->place}}</p>
                                                    <button type="button" class="card-game__location"
                                                            data-id="{{$game->id}}"
                                                            data-modal="modalMap">
                                                        Это где?
                                                    </button>
                                                </div>
                                                <div class="card-game__item">
                                                    <p class="card-game__caption">
                                                        Часы, минуты
                                                    </p>
                                                </div>
                                                <div class="card-game__item">
                                                    <p class="card-game__caption">
                                                        {{$game->price}}
                                                        <span>₽</span>
                                                    </p>
                                                    @if(!$game->reserve)
                                                        <span class="card-game__deny">Мест нет</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-game__line">
                                        <span
                                            class="card-game__type">{{$game->label}}</span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="card-game__button" data-id="{{$game->id}}"
                                        data-modal="modalReg">
                                     {{$game->reserve ? 'Записаться' : 'Записаться в резерв'}}
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
