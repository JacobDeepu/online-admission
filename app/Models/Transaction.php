<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'merch_transaction_id',
        'merch_transaction_date',
        'bank_transaction_id',
        'status'
    ];
}
