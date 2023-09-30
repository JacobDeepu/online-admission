<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'age',
        'uid',
        'religion',
        'caste',
        'social_category',
        'place_of_birth',
        'nationality',
        'mother_tongue'
    ];

    /**
     * Get the parent_details for the student.
     */
    public function parent_details(): HasMany
    {
        return $this->hasMany(ParentDetail::class);
    }
}
