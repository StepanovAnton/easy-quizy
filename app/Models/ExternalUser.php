<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ExternalUser extends Model
{
    protected $table = 'external_users';

    protected $guarded = [];

    public $timestamps = false;

    /**
     * Атрибуты, для которых разрешено массовое назначение.
     *
     * @var array
     */
    protected $fillable = ['name', 'surname'];

    /**
     * Получаем команду пользователя
     *
     * @return BelongsToMany
     */
    public function team()
    {
        return $this->belongsToMany('App\Models\Team', 'team_user', 'external_user_id', 'team_id');
    }
}
