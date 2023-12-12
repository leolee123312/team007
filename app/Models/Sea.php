<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sea extends Model
{
    use HasFactory;
    protected $fillable=[
        'ocean_name',
        'region',
        'area_sq_km',
        'avg_depth',
        'geomorphology',
    ];
    protected $table = 'seas';

    public function fishes()
    {
        return $this->hasMany('App\Models\Fish', 'sid');
    }
    
    public function delete()
    {
        $this->fishes()->delete();
        return parent::delete();
    }        
}
