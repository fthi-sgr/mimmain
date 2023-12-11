<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Depo;

class DepoController extends Controller
{
   public function index()
   {
    $depos= Depo::all();
    return view('depos.index', compact ('depos'));

   }

   public function create()
   {
    return view('depos.create');
   }

   public function store(Request $request)
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


        return redirect()->route('depos.index');
    }catch(\Exception $e){
        dd($e->getMessage());
        return redirect()->back()->with('error','Depo eklenirken bir hata oluştu');

    }
   }

   public function show(Request $request)
    {
        $id = $request->id;
        $data = [
            'depo' => Depo::where('id', $id)->first(),

        ];
        return view('depos.show', $data);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = [
            'depo' => Depo::where('id', $id)->first(),


        ];
        return view('depos.edit' , $data);
    }
    public function update(Request $request)
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

            return redirect()->route('depos.index')->with('success', 'Cari başarıyla güncellendi.');

    }
    public function destroy(Depo $depo)
    {
        $depo->delete();
        return redirect()->route('depos.index')
            ->with('success', 'Cari başarıyla silindi.');
    }

    public function getIller()
    {
        $iller = Depo::distinct('il')->pluck('il');
        return response()->json($iller);
    }

    public function getIlceler($il)
    {
        $ilceler = Depo::where('il', $il)->distinct('ilce')->pluck('ilce');
        return response()->json($ilceler);
    }
}

