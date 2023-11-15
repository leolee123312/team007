<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seas extends Model
{
    use HasFactory;
    protected $fillable=[
        'ocean_name',
        'region',
        'area_sq_km',
        'avg_depth',
        'geomorphology',
    ];
}
