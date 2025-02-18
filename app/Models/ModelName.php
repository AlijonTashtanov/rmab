<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class ModelName extends Model
{
    use HasApiTokens, Notifiable;
    protected $table = 'user';
    protected $fillable = ["email","password","gender"];

    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('name', 'like', '%' . $search . '%');
    }
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
