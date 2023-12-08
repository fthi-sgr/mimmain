<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Urun;

class UrunController extends Controller
{
    public function index()
    {
        $uruns = Urun::all();
        return view('uruns.index', compact('uruns'));
    }

    public function create()
    {
        return view('uruns.create');
    }

    public function store(Request $request)
    {
        try {
            Urun::create([
                'urun_kodu' => $request->urun_kodu,
                'urun_adi' => $request->urun_adi,
                'barkod' => $request->barkod,
                'urun_etiketi' => $request->urun_etiketi,
                'stok_saklama_birimi' => $request->stok_saklama_birimi,
                'mensei' => $request->mensei,
                'gtip_no' => $request->gtip_no,
                'aciklama' => $request->aciklama,
            ]);

            return redirect()->route('uruns.index')->with('success', 'Ürün başarıyla eklendi.');
        } catch (\Exception $e) {
            // Hata durumunda hatayı göster ve geri dön
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Ürün eklenirken bir hata oluştu!');
        }
    }

    public function show(Urun $urun)
    {
        return view('uruns.show', compact('urun'));
    }

    public function edit(Urun $urun)
    {
        return view('uruns.edit', compact('urun'));
    }

    public function update(Request $request, Urun $urun)
    {
        try {
            $urun->update([
                'urun_kodu' => $request->urun_kodu,
                'urun_adi' => $request->urun_adi,
                'barkod' => $request->barkod,
                'urun_etiketi' => $request->urun_etiketi,
                'stok_saklama_birimi' => $request->stok_saklama_birimi,
                'mensei' => $request->mensei,
                'gtip_no' => $request->gtip_no,
                'aciklama' => $request->aciklama,
            ]);

            return redirect()->route('uruns.index')->with('success', 'Ürün başarıyla güncellendi.');
        } catch (\Exception $e) {
            // Hata durumunda hatayı göster ve geri dön
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Ürün güncellenirken bir hata oluştu!');
        }
    }

    public function destroy(Urun $urun)
    {
        $urun->delete();
        return redirect()->route('uruns.index')->with('success', 'Ürün başarıyla silindi.');
    }
}
