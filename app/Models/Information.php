<?php

namespace App\Models;

use App\Traits\HasTranslations;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class Information extends Model implements HasMedia
{
    use HasRoles;
    use HasTranslations;
    use InteractsWithMedia;
    use Status;

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @var string[]
     */
    public $translatable = ['title', 'content'];

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

        if (isset($urlToFirstListImage[0]) && $urlToFirstListImage[0]->collection_name == 'image') {

            return isset($urlToFirstListImage[0]) ? $urlToFirstListImage[0]->getFullUrl() : '';
        }

        return isset($urlToFirstListImage[1]) && $urlToFirstListImage[1]->collection_name == 'image' ? $urlToFirstListImage[1]->getFullUrl() : '';
    }

    /**
     * @return mixed
     */
    public function getFileUrl()
    {
        $urlToFirstListImage = $this->getMedia("*");

        if (isset($urlToFirstListImage[0]) && $urlToFirstListImage[0]->collection_name == 'file') {

            return isset($urlToFirstListImage[0]) ? $urlToFirstListImage[0]->getFullUrl() : '';
        }

        return isset($urlToFirstListImage[1]) && $urlToFirstListImage[1]->collection_name == 'file' ? $urlToFirstListImage[1]->getFullUrl() : '';

    }


}
