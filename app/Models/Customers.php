<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customer';
    protected $fillable = ['avatar','name','gender','phone','email'];
    use HasFactory;
}
