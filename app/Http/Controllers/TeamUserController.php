<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ExternalUser;
use App\Models\TeamUser;
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
     * @param $teamID
     * @return void
     */
    public function create(Request $request, $teamID)
    {
        $this->validator($request->all())->validate();

        if ($request->get('externalUser-name')) {
            $externalUser = $this->createExternalUser($request->all());
            $this->externalUserBinding($externalUser, $teamID);
        }

        return redirect('/personal/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Создать внешнего пользователя
     * @param array $data
     * @return mixed
     */
    public function createExternalUser(array $data)
    {
        return ExternalUser::create([
            'name' => $data['externalUser-name'],
            'surname' => $data['externalUser-surname'],
        ]);
    }


    /**
     * Привязать внешнего пользователя к команде
     * @param ExternalUser $user
     * @param $teamID
     * @return mixed
     */
    public function externalUserBinding(ExternalUser $user, $teamID)
    {
        return TeamUser::create([
            'team_id' => (int)$teamID,
            'external_user_id' => $user->id,
        ]);
    }

    /**
     * Привязать внутреннего пользователя к команде
     * @param $userID
     * @param $teamID
     * @return mixed
     */
    public function userBinding($userID, $teamID)
    {
        return TeamUser::create([
            'team_id' => $teamID,
            'user_id' => $userID,
        ]);
    }

    /**
     * Валидация данных
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        $validator = Validator::make(
            $data,
            [
                'externalUser-name' => 'sometimes|nullable|string|max:255|bail|required_with:externalUser-surname',
                'externalUser-surname' => 'sometimes|nullable|string|max:255|bail|required_with:externalUser-name',
                'user-email' => [
                    'nullable', 'email', 'max:255', 'bail', 'exists:users,email',
                ],
            ],
            [
                'user-email.exists' => 'Пользователь не найден',
                'externalUser-name.required_with' => 'Укажите имя',
                'externalUser-surname.required_with' => 'Укажите Фамилию',
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
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
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
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return void
     */
    public function destroy(Request $request)
    {
        if ($request->get('deleteExternalUser')) {
            $externalUser = ExternalUser::find($request->input('deleteExternalUser'));
            $externalUser->delete();
        }

        return redirect('/personal/');
    }
}
