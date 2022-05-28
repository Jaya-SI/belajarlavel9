<?php

namespace App\Http\Controllers;

use App\Models\warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index(){
        $warga = Warga::all();
        return view('warga.index',compact(['warga']));
    }

    public function create()
    {
        return view('warga.create');
    }

    public function store(Request $request)
    {
        warga::create($request->except(['_token','submit']));
        return redirect('/warga');
    }

    public function edit($id)
    {
        $warga = warga::find($id);
        return view('warga.edit',compact(['warga']));
    }
}