<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Device extends Model
{
    protected $table = 'Device';
    protected $fillable = ['region','year','total','bigeye tuna','yellow fin tuna','albacore tuna','bonito','sailfish','Sharks','squid','saury'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
