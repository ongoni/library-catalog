<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Book
 * @package App\Models
 * @mixin Builder
 */
class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'edition', 'author_id'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'author_id'];

    /**
     * Get related author
     *
     * @return BelongsTo
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function setAuthorAttribute()
    {
        $this->attributes['author'] = $this->author()->getResults();
    }

    /**
     * Set author name in "LastName FN.P." format
     */
    public function setAuthorShortNameAttribute($name)
    {
        $this->attributes['author_short_name'] = $name;
    }

}
