<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Device;
use Illuminate\Support\Facades\Http;



class DeviceController extends Controller
{  public function _invoke(Request $request)
    {
      
        $response = Http::get('https://data.moa.gov.tw/Service/OpenData/FaRss/FaRSS152.aspx?IsTransData=1&UnitId=G81')->json();
        
        $device = new Device($response);
        // response是api
        
        // return view('device',compact('device'));
        // return view('device',['deviceData' => $device->deAPI()]);
        return view('api',['device'=>$device->deAPI()]);
       
        
    }
}
