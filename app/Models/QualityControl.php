<?php

namespace App\Models;

use App\Traits\Status;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QualityControl extends Model
{

    use Status;

    /**
     * Maximal baholash mezoni
     * @var int
     */
    public static int $max_grade = 5;

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'full_name', 'phone', 'comment', 'user_id', 'grade'];

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
                ->orWhere('grade', 'like', '%' . $search . '%')
                ->join('users', 'quality_controls.user_id', '=', 'users.id')
                ->orWhere(function ($query) use ($search) {
                    empty($search) ? $query : $query->orWhere('users.name', 'like', '%' . $search . '%')
                        ->orWhere('users.address', 'like', '%' . $search . '%');
                });
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

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
