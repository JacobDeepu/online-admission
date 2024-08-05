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
        'section',
        'academic_year',
        'previous_institution',
        'photo',
        'birth_certificate',
        'aadhaar',
        'address_proof',
        'immunization',
        'siblings',
        'distance',
        'break',
        'status',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }

    public function document(): HasOne
    {
        return $this->hasOne(Documents::class);
    }

    public function groupChoice(): HasOne
    {
        return $this->hasOne(GroupChoice::class);
    }

    public function transaction(): HasOne
    {
        return $this->hasOne(Transaction::class);
    }

    public function previousSchool(): HasOne
    {
        return $this->hasOne(PreviousSchool::class);
    }
}
