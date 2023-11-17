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
       
      
       try{ 

        $cari = new Cari();
        $cari->cari_kodu = $request->cari_kodu;
        $cari->cari_turu = $request->cari_turu;
        $cari->cari_adi = $request->cari_adi;
        $cari->cari_tipi = $request->cari_tipi;
        $cari->kisa_ad = $request->kisa_ad;
        $cari->cari_etiket = $request->cari_etiket;
        $cari->vergi_no = $request->vergi_no;
        $cari->vergi_dairesi = $request->vergi_dairesi;
        $cari->yetkili = $request->yetkili;
        $cari->yetkili_tel = $request->yetkili_tel;
        $cari->email = $request->email;
        $cari->vade_gunu = $request->vade_gunu;
        $cari->iskonto = $request->iskonto;
        $cari->referans = $request->referans;
        $cari->aciklama = $request->aciklama;
        $cari->save();

      

        return redirect()->route('caris.index');
    }catch(\Exception $e){
        dd($e->getMessage());

        return redirect()->back()->with('error', 'Cari eklenirken bir hata oluştu.');
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
            $cari = new Cari();
            $cari->cari_kodu = $request->cari_kodu;
            $cari->cari_turu = $request->cari_turu;
            $cari->cari_adi = $request->cari_adi;
            $cari->cari_tipi = $request->cari_tipi;
            $cari->kisa_ad = $request->kisa_ad;
            $cari->cari_etiket = $request->cari_etiket;
            $cari->vergi_no = $request->vergi_no;
            $cari->vergi_dairesi = $request->vergi_dairesi;
            $cari->yetkili = $request->yetkili;
            $cari->yetkili_tel = $request->yetkili_tel;
            $cari->email = $request->email;
            $cari->vade_gunu = $request->vade_gunu;
            $cari->iskonto = $request->iskonto;
            $cari->referans = $request->referans;
            $cari->aciklama = $request->aciklama;
            $cari->save();
    
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

