<?php

namespace App\Http\Controllers;

use App\Models\Kominfo;
use Illuminate\Http\Request;

class KominfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.departement.kominfo.index');
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
    public function show(Kominfo $kominfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kominfo $kominfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kominfo $kominfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kominfo $kominfo)
    {
        //
    }
}
