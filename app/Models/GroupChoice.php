<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupChoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_id',
        'choice_one',
        'choice_two',
        'choice_three'
    ];
}
