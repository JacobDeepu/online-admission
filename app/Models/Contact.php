<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'primary_number',
        'secondary_number',
        'house_name',
        'road',
        'street',
        'area',
        'city',
        'post_office',
        'pin_code',
        'permanent_house_name',
        'permanent_road',
        'permanent_street',
        'permanent_area',
        'permanent_city',
        'permanent_post_office',
        'permanent_pin_code'
    ];
}
