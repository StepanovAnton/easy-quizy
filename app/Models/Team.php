<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    protected $table = 'teams';

    /**
     * Возвращает список пользователей которые зарегестрированны
     *
     * @return BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    /**
     * Возвращает список пользователей которые не зарегестрированны
     *
     * @return BelongsToMany
     */
    public function externalUsers()
    {
        return $this->belongsToMany('App\Models\ExternalUser', 'team_user');

    }
}
