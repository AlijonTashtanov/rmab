<?php

namespace App\Models;

use App\Traits\HasTranslations;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Spatie\Permission\Traits\HasRoles;

class Region extends Model
{
    use HasRoles;
    use HasTranslations;
    use Status;

    /**
     * @var string[]
     */
    public $translatable = ['name'];

    protected $fillable = [];

    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('name->uz', 'like', '%' . $search . '%');
    }

    /**
     * @return array|mixed[]
     */
    public static function map()
    {
        $regions = Region::all();

        $collection = collect($regions);

//        return $regions->map(function ($post){
//            return $post->getTranslation('name', 'uz');
//        })->pluck('name')->all();

        return $collection->map(function ($model) {
            return $model->getTranslation('name', 'uz');
        })->pluck('name->uz', 'id')->all();
    }
}
