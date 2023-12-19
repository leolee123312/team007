<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sea;
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
    public function edit(string $id)
    {
        $sea = Sea::findOrFail($id);
        return view('seas.edit', ['sea'=>$sea]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sea = Sea::findOrFail($id);

        $sea->ocean_name = $request->input('ocean_name');
        $sea->region = $request->input('region');
        $sea->area_sq_km = $request->input('area_sq_km');
        $sea->avg_depth = $request->input('avg_depth');
        $sea->geomorphology = $request->input('geomorphology');
        $sea->save();

        return redirect('seas');
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
}
