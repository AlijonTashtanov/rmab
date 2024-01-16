<?php

namespace App\Models;

use App\Traits\Status;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use Status;

    /**
     * @var array
     */
    protected $fillable = ['icon','url','status'];

    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('icon', 'like', '%' . $search . '%');
    }
}
