<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Invoice extends Model
{
    use HasFactory, softDeletes;

    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }
}
