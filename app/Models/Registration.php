<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'contact_id',
        'transaction_id',
        'class',
        'academic_year',
        'previous_institution',
        'photo',
        'birth_certificate',
        'aadhaar',
        'address_proof',
        'siblings'
    ];

    /**
     * Get the registration that owns the student.
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Get the registration that owns the student.
     */
    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
