<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Purchase extends Model
{

    protected $table = 'purchases';
    protected $fillable = ['email', 'password'];
    protected $primaryKey = 'custom_id';
    public $timestamps = false;
    
}