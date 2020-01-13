@extends('layouts.app')

@section('content')
    <div class="wrap">
        <div class="editing">
            <div class="editing__container">
                <div class="editing__inner">
                    <div class="editing__block">
                        <div class="editing__form">
                            <h2 class="editing__title">Авторизация</h2>
                            <form class="form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form__inner">
                                    <div class="form__item">
                                        <span class="form__caption">E-mail</span>
                                        <input name="email" type="email" class="input" placeholder="Введите почту"/>
                                        @error('email')
                                        <p class="form__error">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">Пароль</span>
                                        <div class="password">
                                            <input name="password" type="password" class="input"
                                                   placeholder="Введите пароль"/>
                                            <button type="button" class="password__button"></button>
                                            @error('password')
                                            <p class="form__error">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form__forgot">
                                            <a href="{{ route('vosstanovlenie-parolya') }}" target="_blank"
                                               class="form__link">Забыли
                                                пароль?</a>
                                        </div>
                                    </div>
                                    <div class="form__submit">
                                        <button name="auth-btn" type="submit" class="button button--fit">
                                            <span class="button__text">Войти</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
