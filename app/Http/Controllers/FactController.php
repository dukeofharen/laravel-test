<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return Fact::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request ) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $id ) {
        return Fact::findOrFail($id);
    }

    /**
     * Display the specified resource.
     */
    public function random() {
        return Fact::inRandomOrder()->first();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, Fact $fact ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Fact $fact ) {
        //
    }
}
