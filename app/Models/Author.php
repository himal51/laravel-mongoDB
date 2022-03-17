<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model {
    use HasFactory;

    protected $connection = 'mongodb';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Author Observer
     *
     * event - Deleting
     *          - Relationship with books delete on author delete.
     */

   /*  public static function boot() {
        parent::boot();

        static::deleting(function ($model) {
            $model->books()->delete();
        });
    } */

    public function books() {
        return $this->hasMany(Book::class, 'author_id');
    }

}
