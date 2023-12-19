<?php

namespace App\Http\Controllers;
use App\Models\Fish;
use App\Models\Sea;
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
    public function edit(string $id)
    {
        $fish = Fish::findOrFail($id);
        $seas = Sea::orderBy('seas.id', 'asc')->pluck('seas.ocean_name', 'seas.id');
        $selected_tags = $fish->Sea->id;
        return view('fishes.edit', ['fish' =>$fish, 'seas' => $seas, 'seasSelected' => $selected_tags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fish = Fish::findOrFail($id);

        $fish->name = $request->input('name');
        $fish->sid = $request->input('sid');
        $fish->longest = $request->input('longest');
        $fish->shortest = $request->input('shortest');
        $fish->start = $request->input('start');
        $fish->end = $request->input('end');
        $fish->lightest_weight = $request->input('lightest_weight');
        $fish->heaviest_weight = $request->input('heaviest_weight');

        $fish->save();

        return redirect('fishes');
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
}
