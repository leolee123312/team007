<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    protected $table = 'newsletter';
    protected $fillable = ['email'];
    protected $primaryKey = 'custom_id';
    public $timestamps = false;
}
