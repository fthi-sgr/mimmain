<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banka;
// use App\Models\Kasa;
// use App\Models\Kart;
// use App\Models\Obanka;
// use App\Models\Cek;
// use App\Models\Senet;



class FinansController extends Controller
{
    public function indexBanka()
    {

        $banks = Banka::all();
        return view('finans.banks.index', compact('banks'));
    }

    public function createBanka()
    {
        return view('finans.banks.create');

    }

    public function storeBanka(Request $request)
    {
       try{

        $banka= new Banka();
        $banka->banka_adi =$request->banka_adi;
        $banka->etiket = $request->etiket;
        $banka->banka_sube = $request->banka_sube;
        $banka->iban = $request->iban;
        $banka->acilis_tarihi = $request->acilis_tarihi;
        $banka->para_birimi = $request->para_birimi;
        $banka->bakiye = $request->bakiye;
        $banka->banka_hesap_adi = $request->banka_hesap_adi;
        $banka->hesap_no = $request->hesap_no;
        $banka->aciklama = $request->aciklama;
        $banka->save();

        return redirect()->route('finans.banks.index');

        }catch(\Exception $e){
            dd($e->getMessage());

            return redirect()->back()->with('eror', "Banka hesabı eklenirken bir hata oluşu!");
        }

    }

    public function showBanka(Request $request)
        {
            $id =$request->id;
            $data=[
                'banka'=> Banka::Where('id', $id)->first(),
            ];
            return view('finans.banks.show',$data);
        }


    public function editBanka(Request $request)
    {

        $id = $request->id;
        $data = [
            'banka' => Banka::where('id', $id)->first(),


        ];
        return view('finans.banks.edit' , $data);
    }
    public function updateBanka(Request $request)
    {


        $id = $request->id;

        // Form validasyonu ekle
        $this->validate($request, [
            'banka_adi' => 'required',
            'etiket' => 'required',
            'banka_sube' => 'required',
            'iban' => 'required',
            'acilis_tarihi' => 'required',
            'para_birimi' => 'required',
            'bakiye' => 'required',
            'banka_hesap_adi' => 'required',
            'hesap_no' => 'required',
            'aciklama' => 'required',
            // ... diğer alanlar için gereken kuralları ekleyin
        ]);

        try {

            // ID'ye sahip cari kaydını bul
            $banka = Banka::findOrFail($id);

            // Model özelliklerini güncelle
            $banka->banka_adi = $request->banka_adi;
            $banka->etiket = $request->etiket;
            $banka->banka_sube = $request->banka_sube;
            $banka->iban = $request->iban;
            $banka->acilis_tarihi = $request->acilis_tarihi;
            $banka->para_birimi = $request->para_birimi;
            $banka->bakiye = $request->bakiye;
            $banka->banka_hesap_adi = $request->banka_hesap_adi;
            $banka->hesap_no = $request->hesap_no;
            $banka->aciklama = $request->aciklama;
            $banka->save();



            // Banka listesi sayfasına yönlendir
            return redirect()->route('finans.banks.index')->with('success', 'Banka başarıyla güncellendi.');

        } catch (\Exception $e) {
            // Hata durumunda hatayı göster ve geri dön
            return redirect()->back()->with('error', 'Banka güncellenirken bir hata oluştu.');
        }
    }
    public function destroyBanka(Banka $banka)
    {
        $banka->delete();
        return redirect()->route('function.banks.index')
            ->with('success', 'Banka hesabı başarıyla silindi.');
    }




}

