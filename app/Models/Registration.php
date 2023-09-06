<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'contact_id',
        'class',
        'academic_year',
        'previous_institution',
        'photo',
        'birth_certificate',
        'aadhaar',
        'address_proof'
    ];
}
