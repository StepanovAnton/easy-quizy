@extends('layouts.app')

@section('content')
    <div class="wrap">
        <div class="editing">
            <div class="editing__container">
                <div class="editing__inner">
                    <div class="editing__block">
                        <div class="editing__form">
                            <h2 class="editing__title">Регистрация</h2>
                            <form class="form" method="POST" action="/register">
                                {{ csrf_field() }}
                                <div class="form__inner">
                                    <div class="form__item">
                                        <span class="form__caption">Имя</span>
                                        <input name="firstName" type="text" required class="input"
                                               placeholder="Введите ваше имя"/>
                                    </div>
                                    <div class="form__item">
                                        <span class="form__caption">E-mail</span>
                                        <input name="email" type="email" required class="input"
                                               placeholder="Введите свой E-mail"/>
                                    </div>
                                    @error('email')
                                    <p class="form__error">{{ $message }}</p>
                                    @enderror
                                    <div class="form__item">
                                        <span class="form__caption">Номер телефона</span>
                                        <input name="phoneNumber" type="text" required class="input"
                                               placeholder="Укажите номер телефона"/>
                                    </div>
                                    @error('phoneNumber')
                                    <p class="form__error">{{ $message }}</p>
                                    @enderror
                                    <div class="form__item">
                                        <span class="form__caption">Пароль</span>
                                        <div class="password">
                                            <input name="password" required type="password" class="input"
                                                   placeholder="Введите пароль"/>
                                            <button type="button" class="password__button"></button>
                                        </div>
                                    </div>
                                    @error('password')
                                    <p class="form__error">{{ $message }}</p>
                                    @enderror
                                    <div class="form__item">
                                        <span class="form__caption">Повтор пароля</span>
                                        <div class="password">
                                            <input required name="password_confirmation" type="password" class="input"
                                                   placeholder="Повторите пароль"/>
                                            <button type="button" class="password__button"></button>
                                        </div>
                                    </div>
                                    <div class="form__submit">
                                        <button name="regBTN" type="submit" class="button button--fit">
                                            <span class="button__text">Зарегистрироваться</span>
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
