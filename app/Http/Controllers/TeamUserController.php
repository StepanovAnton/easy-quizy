<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ExternalUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TeamUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        if ($request->get('externalUser-name')) {
            $externalUser = new ExternalUser();
            $externalUser->name = $request->get('externalUser-name');
            $externalUser->surname = $request->get('externalUser-surname');
            $externalUser->save();
        }

        return redirect('/personal/');
    }

    /**
     * Валидация данных
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {

//        $userByEmailID = User::where('email', $data['user-email'])->first()->id;
//        dd($userByEmailID);
        $validator = Validator::make(
            $data,
            [
                'externalUser-name' => 'sometimes|nullable|string|max:255|bail',
                'externalUser-surname' => 'sometimes|nullable|string|max:255|bail',
                'user-email' => [
                    'nullable', 'email', 'max:255', 'bail', 'exists:users,email',
                ],
            ],
            [
                'user-email.exists' => 'Пользователь не найден',
            ]
        );


        $validator->after(function ($validator) {
            $input = $validator->getData();

            $user = User::where('email', $input['user-email'])->first();
            if ($user !== null && $user->team()->count() !== 0) {
                $validator->errors()->add('user-email', 'Пользователь уже состоит в команде');

                return $validator;
            }
        });

        return $validator;
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
