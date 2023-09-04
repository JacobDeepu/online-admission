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
        'date_of_birth',
        'date_of_birth_word',
        'uid',
        'religion',
        'caste',
        'social_category',
        'place_of_birth',
        'nationality',
        'mother_tongue'
    ];
}
