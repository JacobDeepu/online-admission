<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'photo',
        'birth_certificate',
        'aadhaar',
        'address_proof',
        'immunization',
        'tc',
        'mark_list'
    ];
}
