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
    // 每只魚類只屬於一個海域
    public function Sea(){
        return $this->belongsTo('App\Models\Sea', 'sid', 'id');
    }
    
}
