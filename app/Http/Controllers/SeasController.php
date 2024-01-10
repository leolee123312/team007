<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sea;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Validator;

class SeasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $fishes = Fish::all();
      $seas = Sea::all();
      return view('Seas.index',compact('seas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ocean_name' => 'required',
            'region' => 'required',  
            'area_sq_km' => 'required|numeric', 
            'avg_depth' => 'required|numeric',
            'geomorphology' => 'required',
        

            
            // BOOTSTRAPT 會依據'numeric|required', OR 'required|numeric', 來顯示先後順序
           
        ],[
            "ocean_name.required" => "魚類地名 為必填",
            "region.required" =>"地區為必填",
            "area_sq_km.required"=>"請輸入面積",
            "area_sq_km.numeric" =>"只能輸入數字",
            "avg_depth"=> "請輸入深度",
            "avg_depth.numeric"=>"只能入數字",
            "geomorphology"=>"請輸入地貌",

        ],
        
    );

        if ($validator->passes()) {
            // html 會把表單傳送在$request
            // 通过 input 方法获取表单字段的值
            //從request 獲取數據並把input('name')的值 命名為$name
            $ocean_name = $request->input('ocean_name');
            $region = $request->input('region');
            $area_sq_km = $request->input('area_sq_km');
            $avg_depth = $request->input('avg_depth');
            $geomorphology = $request->input('geomorphology');

            // input('lightest_weight')對應到 form 表單lightest_weight
        
            $sea = Sea::create([
                'ocean_name'=>$ocean_name,
                'region'=>$region,
                'area_sq_km'=>$area_sq_km,
                'avg_depth'=>$avg_depth,
                'geomorphology'=>$geomorphology,
            ]);

        
            return redirect('seas');
        }
        else{
            return redirect()->route('seas.create')
                ->withErrors($validator)
                ->withInput($request->all());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sea = Sea::findOrFail($id);
        $fishes = $sea->fishes;

        return view('seas.show',['sea'=>$sea,'fishes'=>$fishes]);
    }
 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        parent::edit($id);

        $sea = Sea::findOrFail($id);
        return view('seas.edit', ['sea'=>$sea]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $validator = $request->validate([
        'ocean_name' =>'required',
        'region' => 'required',
        'area_sq_km' => 'required|numeric',
        'avg_depth' => 'required|numeric',
        'geomorphology' => 'required',
    ], [
        "ocean_name.required" => "魚類地名 為必填",
        "region.required" => "地區為必填",
        "area_sq_km.required" => "請輸入面積",
        "area_sq_km.numeric" => "只能輸入數字",
        "avg_depth.required" => "請輸入深度",
        "avg_depth.numeric" => "只能入數字",
        "geomorphology.required" => "請輸入地貌",
    ]);

    if ($validator) {
        // Assuming $post is an instance of your model
        $post = Sea::find($id);
        $post->update($validator);
    }

    return redirect('seas')
        ->withErrors($validator)
        ->withInput($request->all());
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sea = Sea::findOrFail($id);
        $sea->delete();
        return redirect('seas');
    }


    public function select(Request $request)
    {
        $region = $request->input('region');
        if ($region=="1") {
            $seas =Sea::select("*")->where('region', '=', '北半球')->get();
            return view('Seas.index',compact('seas'));
        }
        if ($region=="2") {
            $seas =Sea::select("*")->where('region', '=', '北半球和南半球之間')->get();
            return view('Seas.index',compact('seas'));
        }
        if ($region=="3") {
            $seas =Sea::select("*")->where('region', '=', '南半球')->get();
            return view('Seas.index',compact('seas'));
        }
        if ($region=="4") {
            $seas =Sea::select("*")->where('region', '=', '南半球和東半球之間')->get();
            return view('Seas.index',compact('seas'));
        }
        if ($region=="5") {
            $seas =Sea::select("*")->where('region', '=', '東半球')->get();
            return view('Seas.index',compact('seas'));
        }
        if ($region=="6") {
            $seas =Sea::select("*")->where('region', '=', '東半球和西半球之間')->get();
            return view('Seas.index',compact('seas'));
        }
        if ($region=="7") {
            $seas =Sea::select("*")->where('region', '=', '西半球')->get();
            return view('Seas.index',compact('seas'));
        }
        if ($region=="8") {
            $seas =Sea::select("*")->where('region', '=', '西半球和北半球之間')->get();
            return view('Seas.index',compact('seas'));
        }
    }
}

