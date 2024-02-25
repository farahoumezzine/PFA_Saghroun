<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends Model implements Authenticatable
{
    use HasFactory, AuthenticableTrait;

    protected $fillable = [
        'nic','firstname', 'lastname','phone','address','email','dateofbirth','password','confirmpassword','gender','status','type_degree','languages','filename','imagename'
    ];
}
