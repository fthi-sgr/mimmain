<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Urun;

class UrunController extends Controller
{
    public function index()
    {

        $urun = Urun::all();

        return view('urun.index', compact('urun'));

    }

    public function create()
    {
       return view('urun.create');//ürün ekleme
    }

    public function store(Request $request)
    {
        try{

            $urun = new Urun();
            $urun->urun_kodu=$request->urun_kodu;
            $urun->urun_adi=$request->urun_adi;
            $urun->barkod=$request->barkod;
            $urun->urun_etiketi=$request->urun_etiketi;
            $urun->stok_saklama_birimi=$request->stok_saklama_birimi;
            $urun->mensei=$request->mensei;
            $urun->gtip_no=$request->gtip_no;
            $urun->aciklama=$request->urun_adi;
            $urun->save();

            return redirect()->route('urun.index');
        }
        catch(\Exception $e)
        {
            dd($e->getMessage());
            return redirect()->back()->with('error','Ürün eklenirken bir hata oluştu!');
        }
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $data = [
            'urun'=> Urun::where('id',$id)->first(),
        ];
        return view('urun.show',$data);
    }

    public function edit (Request $request)
    {
        $id = $request->id;
        $data = [
            'urun' => Urun::where('id', $id)->first(),


        ];
        return view('urun.edit' , $data);

    }

    public function update(Request $request)
    {
        $id =$request->$id;

            $urun= Urun::where('id',$id)->first();

            $urun->urun_kodu=$request->urun_kodu;
            $urun->urun_adi=$request->urun_adi;
            $urun->barkod=$request->barkod;
            $urun->urun_etiketi=$request->urun_etiketi;
            $urun->stok_saklama_birimi=$request->stok_saklama_birimi;
            $urun->mensei=$request->mensei;
            $urun->gtip_no=$request->gtip_no;
            $urun->aciklama=$request->urun_adi;
            $urun->save();

            return redirect()->route('urun.index')->with('success','Urun başarıyla eklendş.');

    }
    public function destroy(Urun $urun)
    {
        $urun->delete();
        return redirect()->route('urun.index')->with('success','Başarılı bir şekilde silindi');
     }




}
