<?php

namespace App\Http\Controllers;
use App\Models\Fish;
use App\Models\Sea;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class FishesController extends Controller
{
    // PS C:\wamp64\www\team007> php artisan make:controller SeasController --resource  
    // --resuource 提供新增刪除修改等等給controller
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fishes = Fish::all();
        $seas = Sea::orderBy('seas.id', 'asc')->pluck('seas.ocean_name', 'seas.id');
        
        return view('fishes.index',compact('fishes'),['seas' => $seas, 'seasSelected' => null]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $seas = Sea::orderBy('seas.id', 'asc')->pluck('seas.ocean_name', 'seas.id');
       
          
        return view('fishes.create', ['seas' => $seas, 'seasSelected' => null]);
        
        // pluck 用意 return values for a given key:
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            
            'longest' => 'required|numeric|gt:shortest',  
            'shortest' => 'required|numeric|lt:longest', 
            'start' => 'required|date',
            'end' => 'required|date|after:start',
            'lightest_weight' => 'required|numeric|lt:heaviest_weight', 
            'heaviest_weight' => ['required', 'numeric','gt:lightest_weight'],


            
            // BOOTSTRAPT 會依據'numeric|required', OR 'required|numeric', 來顯示先後順序
           

       
           
        ],[
            "name.required" => "魚類名稱 為必填",
            
            "longest.required" =>"最大長度 為必填",
            "longest.numeric" =>"請輸入數字",
            "longest.gt"=> "最大長度必須大於最短長度",

            "shortest.required"=>"最短長度 為必填",
            "shortest.numeric"=>"請輸入數字",
            "shortest.lt"=>"最短必須小於最長",

            "start.required" => "捕魚季節開始月份 為必選",
            "start.date" => "月份格式",
            "end.required" =>"捕魚季節結束月份 為必選",
            "end.date" => "月份格式",
            "end.after"=>"結束日期必須在開始日期之後",

            "lightest_weight.required" => "最輕體重 為必填",
            "lightest_weight.numeric" => "請輸入數字",
            "lightest_weight.lt"=>"最輕體重必須小於最重體重",

            "heaviest_weight.required" => "最重體重 為必填",
            "heaviest_weight.numeric" => " 請輸入數字",
            "heaviest_weight.gt" => "最重體重必須大於最輕體重"

        ],
        
    );
        // 獲取被驗證的數據 $data = $validator->getData();
        // 獲取 heaviest_weight 和 lightest_weight 的值
        // $heaviestWeight = $validator->getData()['heaviest_weight'];
        // $lightestWeight = $validator->getData()['lightest_weight'];


        if ($validator->passes()) {
                    // html 會把表單傳送在$request
        // 通过 input 方法获取表单字段的值
        //從request 獲取數據並把input('name')的值 命名為$name
        
        $name = $request->input('name');
        $sid = $request->input('sid');
        $longest = $request->input('longest');
        $shortest = $request->input('shortest');
        $start = $request->input('start');
        $end = $request->input('end');
        $lightest_weight = $request->input('lightest_weight');
        $heaviest_weight = $request->input('heaviest_weight');
        // input('lightest_weight')對應到 form 表單lightest_weight
        

       
        $fish = Fish::create([
            'name'=>$name,
            'sid'=>$sid,
            'longest'=>$longest,
            'shortest'=>$shortest,
            'start'=>$start,
            'end'=>$end,
            'lightest_weight'=>$lightest_weight,
            'heaviest_weight'=>$heaviest_weight]);
            
        }
        
        else{
            return redirect()->route('fishes.create')
                ->withErrors($validator)
                ->withInput($request->all());
        }



    
        return redirect('fishes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fish =  Fish::findOrFail($id);
        return view('fishes.show')->with('fish',$fish);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   
        parent::edit($id);
        $fish = Fish::findOrFail($id);
        $seas = Sea::orderBy('seas.id', 'asc')->pluck('seas.ocean_name', 'seas.id');
        $selected_tags = $fish->Sea->id;
        // selected_tags => view 有個ddl 需要對應到海域(sea=)的資料表
        return view('fishes.edit', ['fish' =>$fish, 'seas' => $seas, 'seasSelected' => $selected_tags]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validator = $request->validate([
            'name' => 'required',
            
            'longest' => 'required|numeric|gt:shortest',  
            'shortest' => 'required|numeric|lt:longest', 
            'start' => 'required|date',
            'end' => 'required|date|after:start',
            'lightest_weight' => 'required|numeric|lt:heaviest_weight', 
            'heaviest_weight' => ['required', 'numeric','gt:lightest_weight'],


            
            // BOOTSTRAPT 會依據'numeric|required', OR 'required|numeric', 來顯示先後順序
           

       
           
        ],[
            "name.required" => "魚類名稱 為必填",
            
            "longest.required" =>"最大長度 為必填",
            "longest.numeric" =>"請輸入數字",
            "longest.gt"=> "最大長度必須大於最短長度",

            "shortest.required"=>"最短長度 為必填",
            "shortest.numeric"=>"請輸入數字",
            "shortest.lt"=>"最短必須小於最長",

            "start.required" => "捕魚季節開始月份 為必選",
            "start.date" => "月份格式",
            "end.required" =>"捕魚季節結束月份 為必選",
            "end.date" => "月份格式",
            "end.after"=>"結束日期必須在開始日期之後",

            "lightest_weight.required" => "最輕體重 為必填",
            "lightest_weight.numeric" => "請輸入數字",
            "lightest_weight.lt"=>"最輕體重必須小於最重體重",

            "heaviest_weight.required" => "最重體重 為必填",
            "heaviest_weight.numeric" => " 請輸入數字",
            "heaviest_weight.gt" => "最重體重必須大於最輕體重"

        ]
        
    );
        if ($validator) {
            // $判斷有沒有成功  
            
            $fish = Fish::find($id);
            $fish->update($validator);
        }
        
        
        
            return redirect('fishes')
            ->withErrors($validator)
            ->withInput($request->all());
        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fish = Fish::findOrFail($id);
        $fish->delete();
        return redirect('fishes');
    }


    public function submitForm(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            
            'longest' => 'required|numeric|gt:shortest',  
            'shortest' => 'required|numeric|lt:longest', 
            'start' => 'required|date',
            'end' => 'required|date|after:start',
            'lightest_weight' => 'required|numeric|lt:heaviest_weight', 
            'heaviest_weight' => ['required', 'numeric','gt:lightest_weight'],            
            // BOOTSTRAPT 會依據'numeric|required', OR 'required|numeric', 來顯示先後順序

        ],[
            "name.required" => "魚類名稱 為必填",
            "longest.required" =>"最大長度 為必填",
            "longest.numeric" =>"請輸入數字",
            "longest.gt"=> "最大長度必須大於最短長度",

            "shortest.required"=>"最短長度 為必填",
            "shortest.numeric"=>"請輸入數字",
            "shortest.lt"=>"最短必須小於最長",

            "start.required" => "捕魚季節開始月份 為必選",
            "start.date" => "月份格式",
            "end.required" =>"捕魚季節結束月份 為必選",
            "end.date" => "月份格式",
            "end.after"=>"結束日期必須在開始日期之後",

            "lightest_weight.required" => "最輕體重 為必填",
            "lightest_weight.numeric" => "請輸入數字",
            "lightest_weight.lt"=>"最輕體重必須小於最重體重",

            "heaviest_weight.required" => "最重體重 為必填",
            "heaviest_weight.numeric" => " 請輸入數字",
            "heaviest_weight.gt" => "最重體重必須大於最輕體重"

        ],);
        if ($validator->fails()) {
            return response()->json(['code' => 422, 'msg' => $validator->errors()->first()]);
        }
        else {
            // 新增到資料庫
            $fish = Fish::create([
                'name'=>$name,
                'sid'=>$sid,
                'longest'=>$longest,
                'shortest'=>$shortest,
                'start'=>$start,
                'end'=>$end,
                'lightest_weight'=>$lightest_weight,
                'heaviest_weight'=>$heaviest_weight]);
                
        }
        
        
    
    }

    public function select(Request $request){
        // dd($request);
        $startdate = $request->input('startdate');
        $enddate= $request->input('enddate');
       
        
        $fish=Fish::select("*")->whereBetween( 'start', [$startdate, $enddate])->get();
        $seas = Sea::orderBy('seas.id', 'asc')->pluck('seas.ocean_name', 'seas.id');
        

        return view('fishes.index',['fishes'=>$fish ,'seas' => $seas]);
        // fishes fishe.index 的前端        
        // $fish 是我查詢的資料
        
    }
}
