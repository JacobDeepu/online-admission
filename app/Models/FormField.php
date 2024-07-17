<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'field_label', 'field_type', 'field_options', 'is_required', 'field_order'];

    public function category()
    {
        return $this->belongsTo(FieldCategory::class);
    }
}
