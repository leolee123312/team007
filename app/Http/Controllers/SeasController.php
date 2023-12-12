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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
        return Sea::findOrFail($id)->toArray();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
