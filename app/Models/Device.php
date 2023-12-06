<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Device extends Model
{
    public $getdiviceapi;

    public function __construct($response)
    {
        // $_construct($response)的$response是我的api
        $this->getdiviceapi = $response;
        // 把我public $getdiviceapi設定成為'response'
        // 當我new 出新的 $device = new Device($response); _construct 會把response改成getdiviceapi\

    }
    public function deAPI(){


        $collectionAPI= collect($this->getdiviceapi);
        $alldata = $collectionAPI->where('field002', '103')->all();
        return $alldata;
    }

    
}
