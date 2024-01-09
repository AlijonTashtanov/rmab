<?php

namespace App\Models;

use App\Traits\HasTranslations;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Traits\HasRoles;

/** @var Region[] $region */
class Branch extends Model
{
    use HasRoles;
    use HasTranslations;
    use Status;

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @var string[]
     */
    public $translatable = ['name', 'description', 'address'];

    /**
     * @param $search
     * @return Builder
     */
    public static function search($search)
    {
//        return empty($search)
//            ? static::query()
//            : static::query()->where('branches.name->uz', 'like', '%' . $search . '%')
//                ->join('regions', 'branches.region_id', '=', 'regions.id')
//                ->where('regions.name->uz', 'like', '%' . $search . '%');

        return empty($search) ? static::query() : static::query()
            ->where('name->uz', 'like', '%' . $search . '%')
            ->where(static function ($query) use ($search) {
                $query
                    ->whereIn('id', Branch::query()->select('id')->where('name->uz', 'like', '%' . $search . '%'))
                    ->orWhereIn('region_id', Region::query()->select('id')->where('name->uz', 'like', '%' . $search . '%'));
            });
    }

    /**
     * @return BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
}
