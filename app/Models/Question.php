<?php

namespace App\Models;

use App\Concerns\Eloquent\UuidPrimaryKey;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property-read string $id
 * @property-read string|null $creator_id
 * @property-read string|null $category_id
 *
 * @property string $title
 * @property string $answer
 *
 * @property-read Carbon|string|null $created_at
 * @property-read Carbon|string|null $updated_at
 * @property-read Carbon|string|null $deleted_at
 *
 * @property-read User|null $creator
 * @property-read QuestionCategory|null $category
 */
class Question extends Model
{
    use UuidPrimaryKey, SoftDeletes;

    protected $fillable = [
        'title', 'answer'
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(QuestionCategory::class, 'category_id');
    }

}
