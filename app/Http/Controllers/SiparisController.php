<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siparis;

class SiparisController extends Controller
{

    public function index()
    {
        $siparis =Siparis::all();
        return view('satis.asiparis.index',compact('siparis'));
    }
    public function create()
    {
        return view('satis.asiparis.create');

    }
    public function store(Request $request)
    {
        try{
            $siparis =new Siparis();
            $siparis->cari_adi = $request->cari_adi;
            $siparis->cari_adresi =$request->cari_adresi;
            $siparis->siparis_tarihi =$request->siparis_tarihi;
            $siparis->teslimat_tarihi= $request->teslimat_tarihi;
            $siparis->para_birimi =$request->para_birimi;
            $siparis->siparis_no =$request->siparis_no;
            $siparis->proje =$request->proje;
            $siparis->etiket=$request->etiket;
            $siparis->aciklama=$request->aciklama;
            $siparis->dosya= $request->dosya;
            $siparis->save();

            return redirect()->route('satis.asiparis.index');

        }catch(\Exception $e){
            dd($e->getMessage());

            return redirect()->back()->with('eror', "Sipariş oluşturulurken bir hata oluşu!");
        }
    }
    public function show(Request $request)
    {
            $id =$request->id;
            $data=[
                'siparis'=> Siparis::Where('id', $id)->first(),
            ];
            return view('satis.asiparis.show',$data);
    }

    public function edit(Request $request)
    {

        $id = $request->id;
        $data = [
            'siparis' => Siparis::where('id', $id)->first(),


        ];
        return view('satis.asiparis.edit' , $data);
    }
    public function update(Request $request)
    {


        $id = $request->id;

        // Form validasyonu ekle
        $this->validate($request, [
            'cari_adi' => 'required',
            'cari_adresi' => 'required',
            'siparis_tarihi' => 'required',
            'teslim_tarihi'=>'required',
            'para_birimi' => 'required',
            'acilis_tarihi' => 'required',
            'proje' => 'required',
            'bakiye' => 'required',
            'etiket' => 'required',
            'aciklama' => 'required',
            'dosya' => 'required',
            // ... diğer alanlar için gereken kuralları ekleyin
        ]);

        try {

            // ID'ye sahip cari kaydını bul
            $siparis = Siparis::findOrFail($id);

            // Model özelliklerini güncelle
            $siparis->cari_adi = $request->cari_adi;
            $siparis->cari_adresi =$request->cari_adresi;
            $siparis->siparis_tarihi =$request->siparis_tarihi;
            $siparis->teslimat_tarihi= $request->teslimat_tarihi;
            $siparis->para_birimi =$request->para_birimi;
            $siparis->siparis_no =$request->siparis_no;
            $siparis->proje =$request->proje;
            $siparis->etiket=$request->etiket;
            $siparis->aciklama=$request->aciklama;
            $siparis->dosya= $request->dosya;
            $siparis->save();



            // Banka listesi sayfasına yönlendir
            return redirect()->route('satis.asiparis.index')->with('success', 'Banka başarıyla güncellendi.');

        } catch (\Exception $e) {
            // Hata durumunda hatayı göster ve geri dön
            return redirect()->back()->with('error', 'Sipariş oluşuturulurken bir hata oluştu.');
        }
    }
    public function destroy(Siparis $siparis)
    {
        $siparis->delete();
        return redirect()->route('satis.asiparis.index')
            ->with('success', 'Sipariş başarıyla silindi.');
    }


}


