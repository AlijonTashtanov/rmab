<?php

namespace App\Models;

use App\Traits\HasTranslations;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class LocalDocument extends Model implements HasMedia
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
    public $translatable = ['name', 'content'];


    /**
     * @param $search
     * @return Builder
     */
    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('name', 'like', '%' . $search . '%');
    }

    /**
     * @return mixed
     */
    public function getFileUrl()
    {
        $urlToFirstListImage = $this->getMedia("*");

        return isset($urlToFirstListImage[0]) ? $urlToFirstListImage[0]->getFullUrl() : '';
    }

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        $urlToFirstListImage = $this->getMedia("*");

        return isset($urlToFirstListImage[0]) ? $this->fileFormatBytes($urlToFirstListImage[0]->size, 2) : '';
    }

    /**
     * @param $size
     * @param $precision
     * @return string
     */
    public function fileFormatBytes($size, $precision = 0)
    {
        $unit = ['Byte', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB'];

        for ($i = 0; $size >= 1024 && $i < count($unit) - 1; $i++) {
            $size /= 1024;
        }

        return round($size, $precision) . ' ' . $unit[$i];
    }

}
