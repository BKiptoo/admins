<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = 'members'; // Specify the table name if it's different from the default convention

    protected $fillable = [
        'name', 'email', 'role', 'joined_at' // Specify the fields that are mass assignable
    ];

    protected $dates = ['joined_at']; // Specify which fields should be treated as dates
}
