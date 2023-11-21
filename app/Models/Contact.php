<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'house_name',
        'street',
        'post_office',
        'pin_code',
        'city',
        'district',
        'state',
        'permanent_house_name',
        'permanent_street',
        'permanent_post_office',
        'permanent_pin_code',
        'permanent_city',
        'permanent_district',
        'permanent_state'
    ];
}
