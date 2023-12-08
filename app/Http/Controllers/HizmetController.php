<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hizmet; // hizmet modeli

class HizmetController extends Controller
{
    public function index()
    {

        $hizmet = Hizmet::all();
        return view('hizmet.index', compact('hizmet'));
    }

    public function create()
    {
        return view('hizmet.create');
    }

    public function store(Request $request)
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

            return redirect()->route('hizmet.index');
        }catch(\Exception $e){
            dd($e->getMessage());

            return redirect()->back()->with('error', 'hizmet eklenirken bir hata oluştu.');
        }
    }

    public function show(Request $request)
    {
        $id = $request-> id;
        $data=[
            'hizmet'=>Hizmet::where('id',$id)->first(),
        ];
        return view('hizmet.show',$data);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = [
            'hizmet' => Hizmet::where('id', $id)->first(),


        ];
        return view('caris.edit' , $data);
    }

    public function update(Request $request)
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
    public function destroy (Hizmet $hizmet)
    {
        $hizmet->delete();
        return redirect()->route('hizmet.index')->with('success', 'Silindi');
    }


}
