<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BookSeries
 *
 * @property int $id
 * @property int|null $book_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\BookSeriesFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|BookSeries newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookSeries newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookSeries query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookSeries whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookSeries whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookSeries whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookSeries whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BookSeries extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id'
    ];

    protected $table = 'books_series';

    public $timestamps = true;

    public function books()
    {
        $this->hasMany(Bool::class);
    }
}
