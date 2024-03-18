<?php

namespace App\Models;

use App\Traits\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/** @var District[] $district */
/** @var Region[] $region */

/** @var Service[] $service */
class ApplicationUseService extends Model
{
    use Status;

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
                ->orWhere('comment', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->join('users', 'application_use_services.user_id', '=', 'users.id')
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
    public function service()
    {
        return $this->belongsTo(ApplicationUseServiceTypes::class, 'service_id', 'id');
    }


    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return string[]
     */
    public static function statuses()
    {
        return [
            self::$status_active => "O'qildi",
            self::$status_inactive => "O'qilmadi"
        ];
    }

}
