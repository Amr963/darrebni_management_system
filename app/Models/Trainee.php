<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name_ar',
        'middle_name_ar',
        'last_name_ar',
        'first_name_en',
        'middle_name_en',
        'last_name_en',
        'email',
        'phone_number',
        'date',
    ];
}