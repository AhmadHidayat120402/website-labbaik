<?php

namespace App\Http\Controllers;

use App\Models\kwu;
use Illuminate\Http\Request;

class KwuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kwu::all();
        return view('admin.departement.kwu.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('kwu', 'public');
        kwu::create($data);
        return redirect('/admin/kwu');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        if (!empty($data['foto'])) {
            $data['foto'] = $request->file('foto')->store('kwu', 'public');
        } else {
            unset($data['foto']);
        }
        kwu::findOrFail($id)->update($data);
        return redirect('/admin/kwu');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        kwu::findOrFail($id)->delete();
        return  redirect('/admin/kwu');
    }
}
