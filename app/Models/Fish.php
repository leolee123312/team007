<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'sid',
        'longest',
        'shortest',
        'start',
        'end',
        'lightest_weight',
        'heaviest_weight'
    ];
    
    protected $table = 'fishes';

}
