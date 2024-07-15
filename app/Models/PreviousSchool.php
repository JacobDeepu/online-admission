<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreviousSchool extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'name',
        'city',
        'year',
        'class',
        'syllabus',
        'reason',
    ];
}
