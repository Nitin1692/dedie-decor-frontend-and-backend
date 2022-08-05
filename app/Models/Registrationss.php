<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrationss extends Model
{
    use HasFactory;
    protected $fillable = [
        'Fullname',
        'Password',
        'email'
    ];
}
