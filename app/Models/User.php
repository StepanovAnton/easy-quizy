<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Атрибуты, для которых разрешено массовое назначение.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'email', 'password', 'phoneNumber',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'lastName', 'city', 'dateOfBirth', 'gender', 'lastName',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Получаем команду пользователя
     *
     * @return BelongsToMany
     */
    public function team()
    {
        return $this->belongsToMany('App\Models\Team', 'team_user', 'user_id', 'team_id');
    }

    /**
     * Проверяет является ли пользователь администратором команды
     */
    public function teamOwner()
    {
        $authUserID = \Auth::user()->id;
        $teamOwner = $this->belongsToMany('App\Models\Team', 'team_user', 'user_id', 'team_id')->first()->users->where('team_admin', true)->where('id', $authUserID)->count();
        return $teamOwner === 1 ? true : false;
    }
}
