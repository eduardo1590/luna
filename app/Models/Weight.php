<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;

    protected $fillable = [
        'dog_id',
        'date',
        'weight',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'date'
    ];
}
