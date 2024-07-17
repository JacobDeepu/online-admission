<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponseValue extends Model
{
    use HasFactory;

    protected $fillable = ['response_id', 'field_id', 'field_value'];

    public function response()
    {
        return $this->belongsTo(FormResponse::class);
    }

    public function field()
    {
        return $this->belongsTo(FormField::class);
    }
}
