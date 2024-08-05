<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'religion',
        'caste',
        'social_category',
        'uid',
        'blood_group',
        'disability',
        'disability_details',
    ];

    public function parentDetails(): HasMany
    {
        return $this->hasMany(ParentDetail::class);
    }

    public function registration(): HasOne
    {
        return $this->hasOne(Registration::class);
    }
}
