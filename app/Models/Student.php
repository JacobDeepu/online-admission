<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'class',
        'academic_year',
        'nationality',
        'date_of_birth',
        'date_of_birth_word',
        'place_of_birth',
        'religion',
        'caste',
        'social_category',
        'mother_tongue',
        'uid'
    ];
}
