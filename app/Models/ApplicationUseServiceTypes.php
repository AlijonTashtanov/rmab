<?php

namespace App\Models;

use App\Traits\HasTranslations;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ApplicationUseServiceTypes extends Model
{
    use HasTranslations;
    use Status;

    /**
     * @var string[]
     */
    public $translatable = ['name'];


    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @param $search
     * @return Builder
     */
    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('name->uz', 'like', '%' . $search . '%');
    }
}
