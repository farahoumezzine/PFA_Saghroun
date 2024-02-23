<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'nic','firstname', 'lastname','phone','address','email','dateofbirth','gender','status','type_degree','languages','filename','imagename'
    ];
    use HasFactory;
}
