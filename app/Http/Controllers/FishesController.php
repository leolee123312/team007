<?php

namespace App\Http\Controllers;
use App\Models\Fish;
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
       return Fish::all()->toArray();
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
        return Fish::findOrFail($id)->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
