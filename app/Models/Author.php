<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Author
 * @package App\Models
 * @mixin Builder
 */
class Author extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['first_name', 'patronymic', 'last_name'];

//    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public static function boot() {
        parent::boot();

        static::deleting(function (Author $author) {
            $author->books()->each(fn($book) => $book->delete());
        });
    }

    /**
     * Get books related to author
     *
     * @return HasMany
     */
    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function setBookCountAttribute()
    {
        $this->attributes['book_count'] = count($this->books()->getResults());
    }

    public function setBooksAttribute()
    {
        $this->attributes['books'] = $this->books()->getResults();
    }

}
