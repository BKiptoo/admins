<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $fillable = [
        'user_id', 'category_id', 'name', 'tags', 'description', 'photo'
    ];

    // Define relationships if any
    public static function create(array $array)
    {
    }
}
