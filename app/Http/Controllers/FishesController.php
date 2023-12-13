<?php

namespace App\Http\Controllers;
use App\Models\Fish;
use Illuminate\Http\Request;
use App\Models\Team;

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
        
        return view('fishes.index',compact('fishes'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('fishes.create');
        $seas= Sea::orderBy('seas.id','asc')->pluck('seas.name','seas.id');
        return view('fishes.create',['seas'=>$seas,'teamSelected'=> null]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $ocean_name = $request->input('ocean_name');
        $longest = $request->input('longest');
        $shortest = $request->input('shortest');
        $start = $request->input('start');
        $end = $request->input('end');
        $lightest_weight = $request->input('lightest_weight');
        $heaviest_weight = $request->input('heaviest_weight');

        $fish = Fish::create([
            'name'=>$name,
            'ocean_name'=>$ocean_name,
            'longest'=> $longest,
            'shortest'=> $shortest,
            'start'=> $start,
            'end'=> $end,
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
        $seas = Sea::orderBy('seas.id', 'asc')->pluck('seas.name', 'seas.id');
        $selected_tags = $fish->sea->id;
        return view('fishes.edit', ['fish' =>$fish, 'seas' => $seas, 'seaSelected' => $selected_tags]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fish = Fish::findOrFail($id);

        $fish->name = $request->input('name');
        $fish->tid = $request->input('ocean_name');
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
