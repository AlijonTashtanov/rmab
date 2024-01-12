<?php

namespace App\Models;

use App\Traits\HasTranslations;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class Page extends Model implements HasMedia
{
    use HasRoles;
    use HasTranslations;
    use InteractsWithMedia;
    use Status;

    /**
     * Shartnoma tuzish
     * @var int
     */
    public static int $page_contract_conclusion = 1;

    /**
     * Sifat nazorati
     * @var int
     */
    public static int $page_quality_control = 2;

    /**
     * Jo’natma haqida ma’lumot olish
     * @var int
     */
    public static int $page_information_about_shipment = 3;

    /**
     * Xizmatlardan foydalanish uchun ariza berish
     * @var int
     */
    public static int $page_application_services = 4;


    /**
     * @var array
     */
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

    /**
     * @return string[]
     */
    public static function pageTypes()
    {
        return [
            self::$page_contract_conclusion => 'Shartnoma tuzish',
            self::$page_quality_control => 'Sifat nazorati',
            self::$page_information_about_shipment => 'Jo’natma haqida ma’lumot olish',
            self::$page_application_services => 'Xizmatlardan foydalanish uchun ariza berish',
        ];
    }

    /**
     * @return array|\ArrayAccess|mixed|string
     */
    public function getPageTypeName()
    {
        return Arr::get(self::pageTypes(), $this->page_type);
    }
}
