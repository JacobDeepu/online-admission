<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'student_id'
    ];

    /**
     * Get the parent that owns the student.
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
