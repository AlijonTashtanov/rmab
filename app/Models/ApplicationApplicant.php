<?php

namespace App\Models;

use App\Traits\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/** @var District[] $district */
/** @var Region[] $region */
class ApplicationApplicant extends Model implements HasMedia
{
    use Status;
    use InteractsWithMedia;

    /**
     * @var array
     */
    protected $fillable = [
        'id', 'first_name', 'last_name', 'region_id', 'district_id',
        'address', 'corruption_type_id', 'address_where_corruption_occurred',
        'name_person_suspected_corruption', 'phone', 'comment'
    ];


    /**
     * @param $search
     * @return Builder
     */
    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('first_name', 'like', '%' . $search . '%');
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
    public function corruptionType()
    {
        return $this->belongsTo(CorruptionType::class, 'corruption_type_id', 'id');
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
