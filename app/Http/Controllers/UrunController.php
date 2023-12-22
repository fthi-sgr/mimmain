<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Urun;
use App\Models\Hizmet;
use App\Models\Depo;
use App\Models\City;
use App\Models\District;

class UrunController extends Controller
{
//Ürünler Crud Bölümü
    public function indexUrun()
    {
        $uruns = Urun::all();
        return view('urunhizmet.uruns.index', compact('uruns'));
    }

    public function createUrun()
    {
        return view('urunhizmet.uruns.create');
    }

    public function storeUrun(Request $request)
    {
        try {
                $urun= new Urun();
                $urun->urun_kodu = $request->urun_kodu;
                $urun->urun_adi = $request->urun_adi;
                $urun->barkod = $request->barkod;
                $urun->urun_etiketi = $request->urun_etiketi;

                $urun->mensei = $request->mensei;
                $urun->gtip_no = $request->gtip_no;
                $urun->aciklama = $request->aciklama;
                $urun->save();


            return redirect()->route('urunhizmet.uruns.index')->with('success', 'Ürün başarıyla eklendi.');
        } catch (\Exception $e) {
            // Hata durumunda hatayı göster ve geri dön
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Ürün eklenirken bir hata oluştu!');
        }
    }

    public function showUrun(Request $request)
    {
        $id =$request->id;
        $data=[
            'urun'=>Urun::Where('id',$id)->First(),
        ];
        return view('urunhizmet.uruns.show', $data);
    }

    public function editUrun(Request $request)
    {
        $id =$request->id;
        $data=[
            'urun'=>Urun::Where('id',$id)->First(),
        ];
        return view('urunhizmet.uruns.edit',$data);
    }

    public function updateUrun(Request $request)
    {
            $id =$request->id;

            $this->validate($request,[
                'urun_kodu' => 'required',
                'urun_adi' =>'required',
                'barkod' => 'required',
                'urun_etiketi' =>'required',

                'mensei' => 'required',
                'gtip_no' =>'required',
                'aciklama' =>'required',
            ]);

            try{
                $urun =Urun::findOrFail($id);
                $urun->urun_kodu = $request->urun_kodu;
                $urun->urun_adi = $request->urun_adi;
                $urun->barkod = $request->barkod;
                $urun->urun_etiketi = $request->urun_etiketi;

                $urun->mensei = $request->mensei;
                $urun->gtip_no = $request->gtip_no;
                $urun->aciklama = $request->aciklama;


                $urun->save();


                return redirect()->route('urunhizmet.uruns.index')->with('success', 'Ürün başarıyla güncellendi.');
             } catch (\Exception $e) {
            // Hata durumunda hatayı göster ve geri dön
                dd($e->getMessage());
                return redirect()->back()->with('error', 'Ürün güncellenirken bir hata oluştu!');
            }
    }

    public function destroyUrun(Urun $urun)
    {
        $urun->delete();
        return redirect()->route('urunhizmet.uruns.index')->with('success', 'Ürün başarıyla silindi.');
    }
    public function fetchUrunAdlari()
    {
        $urunAdlari = Urun::pluck('urun_adi');
        return response()->json($urunAdlari);
    }
    public function getUrunList()
        {
            $urun = Urun::all(); // Tüm cari verilerini çek

            return response()->json($urun);
        }

        public function getUrunInfo($id)
        {
            $urun = Urun::find($id); // Belirli bir cari hakkında bilgileri çek

            return response()->json($urun);
        }


//Hizmetler Crud Bölümü
    public function indexHizmet()
    {

        $hizmets = Hizmet::all();
        return view('urunhizmet.hizmet.index', compact('hizmets'));
    }

    public function createhizmet()
    {
        return view('urunhizmet.hizmet.create');
    }

    public function storeHizmet(Request $request)
    {
        try{

            $hizmet =new Hizmet();
            $hizmet->hizmet_kodu= $request->hizmet_kodu;
            $hizmet->hizmet_adi= $request->hizmet_adi;
            $hizmet->hizmet_birimi= $request->hizmet_brimi;
            $hizmet->barkod= $request->barkod;
            $hizmet->hizmet_etiketi= $request ->hizmet_etiketi;
            $hizmet->aciklama= $request->aciklama;
            $hizmet->kdv_id = $request->kdv_id;
            $hizmet->save();

            return redirect()->route('urunhizmet.hizmet.index');
        }catch(\Exception $e){
            dd($e->getMessage());

            return redirect()->back()->with('error', 'hizmet eklenirken bir hata oluştu.');
        }
    }

    public function showHizmet(Request $request)
    {
        $id = $request-> id;
        $data=[
            'hizmet'=>Hizmet::where('id',$id)->first(),
        ];
        return view('urunhizmet.hizmet.show',$data);
    }

    public function editHizmet(Request $request)
    {
        $id = $request->id;
        $data = [
            'hizmet' => Hizmet::where('id', $id)->first(),


        ];
        return view('urunhizmet.hizmet.edit' , $data);
    }

    public function updateHizmet(Request $request)
    {
        $id = $request->id;

        $hizmet = Hizmet::where('id', $id)->first();
        $hizmet =new Hizmet();
        $hizmet->hizmet_kodu= $request->hizmet_kodu;
        $hizmet->hizmet_adi= $request->hizmet_adi;
        $hizmet->hizmet_birimi= $request->hizmet_brimi;
        $hizmet->barkod= $request->barkod;
        $hizmet->hizmet_etiketi= $request ->hizmet_etiketi;
        $hizmet->aciklama= $request->aciklama;
        $hizmet->kdv_id = $request->kdv_id;
        $hizmet->save();

        return redirect()->route('hizmet.index')->with('success','Hizmet güncellendi.');

    }
    public function destroyHizmet (Hizmet $hizmet)
    {
        $hizmet->delete();
        return redirect()->route('hizmet.index')->with('success', 'Silindi');
    }

//Depo Crud Bölümü
    public function indexDepo()
    {
     $depos= Depo::all();
     return view('urunhizmet.depos.index', compact ('depos'));

    }

    public function createDepo()
    {

     return view('urunhizmet.depos.create');
    }



    public function storeDepo(Request $request)
    {

         try{

             $depo =new Depo();
             $depo->depo_kodu = $request->depo_kodu;
             $depo->depo_adi = $request ->depo_adi;
             $depo->acilis_tarihi = $request-> acilis_tarihi;
             $depo->adres = $request->adres;
             $depo->il= $request ->il;
             $depo->ilce= $request->ilce;
             $depo->posta_kodu=$request->posta_kodu;
             $depo->save();


         return redirect()->route('urunhizmet.depos.index');
     }catch(\Exception $e){
         dd($e->getMessage());
         return redirect()->back()->with('error','Depo eklenirken bir hata oluştu');

     }
    }

    public function showDepo(Request $request)
     {
         $id = $request->id;
         $data = [
             'depo' => Depo::where('id', $id)->first(),

         ];
         return view('urunhizmet.depos.show', $data);
     }

     public function editDepo(Request $request)
     {
         $id = $request->id;
         $data = [
             'depo' => Depo::where('id', $id)->first(),


         ];
         return view('urunhizmet.depos.edit' , $data);
     }
     public function updateDepo(Request $request)
     {

         $id = $request->id;
         // try {

             $depo =  Depo::where('id', $id)->first();

             $depo->depo_kodu = $request->depo_kodu;
             $depo->depo_adi = $request ->depo_adi;
             $depo->acilis_tarihi = $request-> acilis_tarihi;
             $depo->adres = $request->adres;
             $depo->il= $request ->il;
             $depo->ilce= $request->ilce;
             $depo->posta_kodu=$request->posta_kodu;
             $depo->save();

             return redirect()->route('urunhizmet.depos.index')->with('success', 'Depo başarıyla güncellendi.');

     }
     public function destroyDepo(Depo $depo)
     {
         $depo->delete();
         return redirect()->route('urunhizmet.depos.index')
             ->with('success', 'Cari başarıyla silindi.');
     }

     public function getCities()
     {
         $cities = City::all();
         return response()->json($cities);
     }
     public function getDistricts($cityId)
     {
         try {
             $city = City::findOrFail($cityId);
             $districts = $city->districts;
             return response()->json($districts);
         } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
             return response()->json(['error' => 'Şehir bulunamadı.'], 404);
         }
     }

}
