<?php

namespace App\Models;

use App\Traits\HasTranslations;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class OurAdvantage extends Model implements HasMedia
{
    use HasRoles;
    use HasTranslations;
    use InteractsWithMedia;
    use Status;

    protected $fillable = [];

    /**
     * @var string[]
     */
    public $translatable = ['title', 'description'];


    /**
     * @param $search
     * @return Builder
     */
    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('title->uz', 'like', '%' . $search . '%');
    }


    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        $urlToFirstListImage = $this->getMedia("*");

        return isset($urlToFirstListImage[0]) ? $urlToFirstListImage[0]->getFullUrl() : '';
    }

}
