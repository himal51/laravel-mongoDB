<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
