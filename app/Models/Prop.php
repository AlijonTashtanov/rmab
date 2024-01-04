<?php

namespace App\Models;

use App\Traits\HasTranslations;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Prop extends Model
{

    use HasRoles;
    use HasTranslations;
    use Status;

    /**
     * @var string[]
     */
    public $translatable = ['title', 'content'];

    protected $fillable = [];

    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('title->uz', 'like', '%' . $search . '%');
    }
}
