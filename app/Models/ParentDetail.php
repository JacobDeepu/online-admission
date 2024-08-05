<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class ParentDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nationality',
        'qualification',
        'occupation',
        'annual_income',
        'mobile_number',
        'email',
        'relationship',
        'student_id',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function registration(): HasOneThrough
    {
        return $this->hasOneThrough(
            Registration::class,
            Student::class,
            'id',
            'student_id',
            'student_id',
            'id'
        );
    }
}
