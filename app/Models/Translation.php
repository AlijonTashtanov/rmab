<?php

namespace App\Models;

use App\Traits\HasTranslations;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Translation extends Model
{
    use HasRoles;
    use HasTranslations;

    protected $fillable = ['key'];

    /**
     * @var string[]
     */
    public $translatable = ['value'];

    /**
     * @param $search
     * @return Builder
     */
    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('key', 'like', '%' . $search . '%');
    }
}
