<?php

namespace App\Http\Controllers;

use App\Models\Uzer;
use Illuminate\Http\Request;

class UzerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // this method retrieve all the data with a single table
        // $user = Uzer::get();
        // return $user;

        // this method retrieve all the data with multiple tables
        // $user = Uzer::with('post')->get();

        // this method retrieve the data which does not posted anything yet
        $user = Uzer::doesntHave('post')->get();
        return response()->json($user);
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
    public function show(Uzer $uzer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Uzer $uzer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Uzer $uzer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Uzer $uzer)
    {
        //
    }
}
