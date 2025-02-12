<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    // Datois Personales
    function person()
    {
        return $this->belongsTo(Person::class);
    }
}
