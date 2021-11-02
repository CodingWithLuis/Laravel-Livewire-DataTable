<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'year_release',
        'director_id'
    ];

    public function director()
    {
        return $this->belongsTo(Director::class);
    }
}
