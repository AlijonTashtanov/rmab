<?php

namespace App\Models;

use App\Traits\Status;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use Status;

    protected $fillable = [];

    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('full_name', 'like', '%' . $search . '%');
    }
}
