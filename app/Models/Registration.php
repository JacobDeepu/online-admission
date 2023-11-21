<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'immunization',
        'siblings',
        'distance',
        'status'
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

    /**
     * Get the documents for the registration.
     */
    public function documents(): HasOne
    {
        return $this->hasOne(Documents::class);
    }

    /**
     * Get the transaction for the student.
     */
    public function transaction(): HasOne
    {
        return $this->hasOne(Transaction::class);
    }
}
