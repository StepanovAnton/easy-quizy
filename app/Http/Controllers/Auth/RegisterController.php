<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make(
            $data,
            [
                'firstName' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'phoneNumber' => 'required|string|max:12|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ],
            [
                'password.min' => 'Пароль должен быть больше 6 символов',
                'password.confirmed' => 'Пароли не совпадают',
                'email.unique' => 'Пользователь с почтой ' . $data['email'] . ' уже существует',
                'phoneNumber.unique' => 'Пользователь с телефоном ' . $data['phoneNumber'] . ' уже существует',
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstName' => $data['firstName'],
            'email' => $data['email'],
            'phoneNumber' => $data['phoneNumber'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
}
