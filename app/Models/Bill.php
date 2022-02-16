<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Faker\Provider\Lorem as lorem;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'value',
        'bill_categories_id'
    ];
}
