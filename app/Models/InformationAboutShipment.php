<?php

namespace App\Models;

use App\Traits\Status;
use ArrayAccess;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/** @var District[] $district */
/** @var Region[] $region */
/** @var Service[] $service */

/** @var DispatchGeography[] $dispatchGeography */
class InformationAboutShipment extends Model  implements HasMedia
{
    use Status;
    use InteractsWithMedia;
    /**
     * Xat orqali qog'oz shaklida pdf
     * @var int
     */
    public static int $type_want_take_official = 0;

    /**
     * Oddiy text shaklida bo'ladi
     * @var int
     */
    public static int $type_want_take_text = 1;


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
            : static::query()
                ->orWhere('shipment_number', 'like', '%' . $search . '%')
                ->orWhere('shipping_date', 'like', '%' . $search . '%')
                ->join('users', 'information_about_shipments.user_id', '=', 'users.id')
                ->orWhere(function ($query) use ($search) {
                    empty($search) ? $query : $query->orWhere('users.name', 'like', '%' . $search . '%')
                        ->orWhere('users.address', 'like', '%' . $search . '%');
                });
    }

    /**
     * @return BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function dispatchGeography()
    {
        return $this->belongsTo(DispatchGeography::class, 'dispatch_geography_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }


    /**
     * @return string[]
     */
    public static function statuses()
    {
        return [
            self::$status_active => "O'qildi",
            self::$status_inactive => "O'qilmadi",
            self::$status_cancel => 'Bekor qilindi'
        ];
    }

    /**
     * @return string[]
     */
    public static function wantTakeTypes()
    {
        return [
            self::$type_want_take_official => 'Official',
            self::$type_want_take_text => 'Text'
        ];
    }

    /**
     * @return array|ArrayAccess|mixed|string
     */
    public function getWantTakeName()
    {
        return Arr::get(self::wantTakeTypes(), $this->type_want_take);
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

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return BelongsTo
     */
    public function answerBy()
    {
        return $this->belongsTo(User::class, 'anwser_by', 'id');
    }
}
