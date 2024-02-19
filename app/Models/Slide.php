<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'button_name', 'button_link', 'photo'];

    // Ensure 'photo' attribute is cast to a string
    protected $casts = [
        'photo' => 'string',
    ];

    // Define a custom query scope for slides with a certain name
    public function scopeWithName($query, $name)
    {
        return $query->where('name', $name);
    }

    // Define a method for creating a slide
    public static function createSlide(array $data)
    {
        return self::create($data);
    }
}
