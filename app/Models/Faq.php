<?php

namespace App\Models;

use App\Traits\HasTranslations;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Faq extends Model
{
    use HasRoles;
    use HasTranslations;
    use Status;

    /**
     * @var array
     */
    protected $fillable = ['id'];

    /**
     * @var string[]
     */
    public $translatable = ['answer', 'question'];

    public static function search($search)
    {
        return empty($search)
            ? static::query()
            : static::query()->where('question->uz', 'like', '%' . $search . '%');
    }
}
