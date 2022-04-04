<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Author
 * @property string first_name
 * @property string|null patronymic
 * @property string last_name
 * @package App\Models
 * @mixin Builder
 */
class Author extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['first_name', 'patronymic', 'last_name'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

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

    /**
     * Get author name in "LastName FN.P." format
     */
    public function getShortNameAttribute()
    {
        return $this->last_name . ' '
            . mb_substr($this->first_name, 0, 1) . '.'
            . ($this->patronymic ?
                mb_substr($this->patronymic, 0, 1) . '.'
                : ''
            );
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' '
            . ($this->patronymic ? $this->patronymic . ' ' : '')
            . $this->last_name;
    }

}
