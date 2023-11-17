<?php

// app/Http/Controllers/CariController.php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cari; // Cari modelini lullancağımızı belirtiyoruz



class CariController extends Controller
{
    public function index()
    {
        $caris = Cari::all(); // tüm cari kayıtlarını al
        return view('caris.index', compact('caris'));
    }

    public function create()
    {
        return view('caris.create');
    }

    public function store(Request $request)
    {
        //Veri doğrulama kuralları 
        $request->validate([
            
            'cari_kodu' => 'required|string|max:50',
            'cari_turu' => 'required|string|max:50',
            'cari_adi' => 'required|string|max:255',
            'cari_tipi' => 'required|string|max:50',
            'kisa_ad' => 'required|string|max:50',
            'cari_etiket' => 'required|string|max:50',
            'vergi_no' => 'required|string|max:20',
            'vergi_dairesi' => 'required|string|max:50',
            'yetkili' => 'required|string|max:100',
            'yetkili_tel' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'vade_gunu' => 'required|integer',
            'iskonto' => 'required|numeric|between:0,999.99',
            'referans' => 'required|string|max:255',
            'aciklama' => 'required|string',
        ]);

        try{
            Cari::create($request->all());

            return redirect()->route('caris.index')
                ->with('success', 'Cari başarıyla eklendi.');
        }catch(\exception $e){
            \log::error('Cari eklenirken hata oluştu'.$e->getMessage());
            return redirect()->back()->with('error','cari eklenirken bir hata oluştu.');

        }
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
        try {
            $request->validate([
                'cari_kodu' => 'required|string|max:50',
                'cari_turu' => 'required|string|max:50',
                'cari_adi' => 'required|string|max:255',
                'cari_tipi' => 'required|string|max:50',
                'kisa_ad' => 'required|string|max:50',
                'cari_etiket' => 'required|string|max:50',
                'vergi_no' => 'required|string|max:20',
                'vergi_dairesi' => 'required|string|max:50',
                'yetkili' => 'required|string|max:100',
                'yetkili_tel' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'vade_gunu' => 'required|integer',
                'iskonto' => 'required|numeric|between:0,999.99',
                'referans' => 'required|string|max:255',
                'aciklama' => 'required|string',
            ]);
    
            $cari->update($request->all());
    
            return redirect()->route('caris.index')->with('success', 'Cari başarıyla güncellendi.');
        } catch (ModelNotFoundException $e) {
            // Belirtilen ID'ye sahip Cari bulunamazsa
            return redirect()->back()->with('error', 'Cari bulunamadı.');
        } catch (\Exception $e) {
            // Diğer hata durumları için genel bir hata mesajı
            return redirect()->back()->with('error', 'Cari güncellenirken bir hata oluştu.');
        }
    }

    public function destroy(Cari $cari)
    {
        $cari->delete();

        return redirect()->route('caris.index')
            ->with('success', 'Cari başarıyla silindi.');
    }
}

