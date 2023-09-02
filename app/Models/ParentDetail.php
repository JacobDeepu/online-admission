<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'occupation',
        'annual_income',
        'office_address',
        'office_number',
        'mobile_number',
        'email',
        'relationship',
        'student_id'
    ];
}
