<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'dateofbirth','filename','gender'
    ];

    use HasFactory;
}
