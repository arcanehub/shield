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
 * @property-read string|null $parent_id
 * @property string $name
 *
 * @property-read Carbon|string|null $created_at
 * @property-read Carbon|string|null $updated_at
 * @property-read Carbon|string|null $deleted_at
 *
 * @property-read QuestionCategory|null $parent
 * @property-read User|null $creator
 */
class QuestionCategory extends Model
{
    use UuidPrimaryKey, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(static::class, 'parent_id');
    }

}
