<?php

// app/Http/Controllers/CariController.php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cari;



class CariController extends Controller
{
    public function index()
    {
        $caris = Cari::all();
        return view('caris.index', compact('caris'));
    }

    public function create()
    {
        return view('caris.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ad' => 'required',
            'soyad' => 'required',
            'telefon' => 'required',
        ]);

        Cari::create($request->all());

        return redirect()->route('caris.index')
            ->with('success', 'Cari başarıyla eklendi.');
    }

    public function show(Cari $cari)
    {
        return view('caris.show', compact('cari'));
    }

    public function edit(Cari $cari)
    {
        return view('caris.edit', compact('cari'));
    }

    public function update(Request $request, Cari $cari)
    {
        $request->validate([
            'ad' => 'required',
            'soyad' => 'required',
            'telefon' => 'required',
        ]);

        $cari->update($request->all());

        return redirect()->route('caris.index')
            ->with('success', 'Cari başarıyla güncellendi.');
    }

    public function destroy(Cari $cari)
    {
        $cari->delete();

        return redirect()->route('caris.index')
            ->with('success', 'Cari başarıyla silindi.');
    }
}

