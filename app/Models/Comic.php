<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    protected $fillable = ['thumb', 'price', 'series', 'type', 'publisher', 'release_date', 'author', 'pages', 'rating', 'total_votes', 'description'];
}
