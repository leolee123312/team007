<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Device;
use Illuminate\Support\Facades\Http;



class DeviceController extends Controller
{  public function _invoke(Request $request)
    {
      
        $response = Http::get('https://data.moa.gov.tw/Service/OpenData/FaRss/FaRSS152.aspx?IsTransData=1&UnitId=G81')->json();
        foreach ($response as $key ) {
            if($key['field002'] == '104'){
                $bigoc = $key;
                break;
            }
          
        }
        foreach ($response as $key2 ) {
          
            if($key2['field002'] == '103'){
                $spee = $key2;
                
            }
        }
        
        dd($bigoc);

        // $gallery = Device::create([
        //     'region','year','total','bigeye tuna','yellow fin tuna','albacore tuna','bonito','sailfish','Sharks','squid','saury',
        // ], $response); // add $data here
        // $gallery->save();
        

    }
}
