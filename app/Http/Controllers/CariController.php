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
            
            'cari_kodu' => 'required',
            'cari_turu' => 'required',
            'cari_adi' => 'required',
            'cari_tipi' => 'required',
            'kisa_ad' => 'required',
            'car_etiket' => 'required',
            'vergi_no' => 'required',
            'vergi_dairesi' => 'required',
            'yetkili' => 'required',
            'yetkili_tel' => 'required',
            'email' => 'required',
            'vade_gunu' => 'required',
            'iskonto' => 'required',
            'referans' => 'required',
            'aciklama' => 'required',
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
           
            'cari_kodu' => 'required',
            'cari_turu' => 'required',
            'cari_adi' => 'required',
            'cari_tipi' => 'required',
            'kisa_ad' => 'required',
            'car_etiket' => 'required',
            'vergi_no' => 'required',
            'vergi_dairesi' => 'required',
            'yetkili' => 'required',
            'yetkili_tel' => 'required',
            'email' => 'required',
            'vade_gunu' => 'required',
            'iskonto' => 'required',
            'referans' => 'required',
            'aciklama' => 'required',
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

