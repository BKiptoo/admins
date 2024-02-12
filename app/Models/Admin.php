<?php

namespace App\Models;
//namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
    ];

    /**
     * Set the admin's password.
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    /**
     * Check if the provided password matches the stored password.
     *
     * @param  string  $password
     * @return bool
     */
    public function checkPassword($password)
    {
        return Hash::check($password, $this->password);
    }
}
