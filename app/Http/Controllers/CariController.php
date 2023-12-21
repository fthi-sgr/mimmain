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

    public function show(Request $request)
    {
        $id = $request->id;
        $data = [
            'cari' => Cari::where('id', $id)->first(),

        ];
        return view('caris.show', $data);
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $data = [
            'cari' => Cari::where('id', $id)->first(),


        ];
        return view('caris.edit' , $data);
    }
    public function update(Request $request)
    {
        $id = $request->id;

        // Form validasyonu ekle
        $this->validate($request, [
            'cari_kodu' => 'required',
            'cari_turu' => 'required',
            'cari_adi' => 'required',
            'cari_tipi'=>'required',
            'kisa_ad'=>'required',
            'cari_etiket'=>'required',
            'vergi_no'=>'required',
            'vergi_dairesi'=>'required',
            'yetkili'=>'required',
            'yetkili_tel'=>'required',
            'email'=>'required',
            'vade_gunu'=>'required',
            'iskonto'=>'required',
            'referans'=>'required',
            'aciklama'=>'required',
            // ... diğer alanlar için gereken kuralları ekleyin
        ]);

        try {
            // ID'ye sahip cari kaydını bul
            $cari = Cari::findOrFail($id);

            // Model özelliklerini güncelle
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

            // Güncellenmiş kaydı kaydet
            $cari->save();

            // Cari listesi sayfasına yönlendir
            return redirect()->route('caris.index')->with('success', 'Cari başarıyla güncellendi.');
        } catch (\Exception $e) {
            // Hata durumunda hatayı göster ve geri dön
            return redirect()->back()->with('error', 'Cari güncellenirken bir hata oluştu.');
        }
    }

    public function destroy(Cari $cari)
    {
        $cari->delete();
        return redirect()->route('caris.index')
            ->with('success', 'Cari başarıyla silindi.');
    }


        public function getCariList()
        {
            $caris = Cari::all(); // Tüm cari verilerini çek

            return response()->json($caris);
        }

        public function getCariInfo($id)
        {
            $cari = Cari::find($id); // Belirli bir cari hakkında bilgileri çek

            return response()->json($cari);
        }


















//     public function companyEdit(int $id, Request $request, FlasherInterface $flasher)
//     {
//         $id = $id;
//         // $company = Company::onlyTrashed()->findOrFail($id);
//         if (Session::has('adminId')) {
//             $user = User::where('id', Session::get('adminId'))->first();
//         }
//         if (Session::has('subAdminId')) {
//             $user = User::where('id', Session::get('subAdminId'))->first();
//         }

//         $data = [

//             'company' => Company::withTrashed()
//                 ->leftJoin('companies as top_company', 'companies.company_id', '=', 'top_company.id')
//                 ->select('companies.*', 'top_company.name as registered_company')
//                 ->findOrFail($id),
//         ];

//         if ($_POST) {

//             $this->validate($request, [
//                 'name' => 'required',
// //                'email' => 'required|email|unique:companies',
// //                'password' => 'required|min:6|max:20',
//             ], [
//                 'name.required' => 'Ad soyad alanı zorunlu',

// //                'email.required' => 'Email alanı zorunlu',
// //                'email.email' => ' Email formatında giriniz',
// //                'email.unique' => ' Bu mail kayıtlı',

// //                'password.required' => 'Şifre alanı zorunlu',
// //                'password.min' => 'Şifre en az 6 karakter olmalı',
// //                'password.max' => 'Şifre en fazla 20 karakter olmalı',

//             ]);

//             if ($request->email != $data['company']->email) {
//                 $this->validate($request, [
//                     'email' => 'required|email|unique:users',
//                 ], [
//                     'email.required' => 'Email alanı zorunlu',
//                     'email.unique' => ' Bu email kayıtlı',
//                     'email.email' => ' Email formatında giriniz'
//                 ]);
//                 $data['company']->email = $request->email;
//             }

//             $data['company']->name = $request->name;
//             $data['company']->user_role = 0;
//             $data['company']->type = $request->type;
//             if ($request->type == 1) {
//                 $data['company']->company_name = $request->company_name;
//                 $data['company']->tax_number = $request->tax_number;
//                 $data['company']->tax_office = $request->tax_office;
//                 $data['company']->cap_address = $request->cap_address;
//                 $data['company']->web_site = $request->web_site;
//             }

//             if ($request->password) {
//                 $this->validate($request, [

//                     'password' => 'required|min:6|max:20',
//                 ], [
//                     'password.required' => 'Şifre alanı zorunlu',
//                     'password.min' => 'Şifre en az 6 karakter olmalı',
//                     'password.max' => 'Şifre en fazla 20 karakter olmalı',
//                 ]);

//                 $data['company']->password = Hash::make($request->password);
//             }

//             if (Str::of($request->phone)->replaceMatches('/[^A-Za-z0-9]++/', '') != $data['company']->phone) {
//                 $this->validate($request, [
//                     'phone' => 'required|unique:users',
//                 ], [
//                     'phone.required' => 'Telefon alanı zorunlu',
//                     'phone.unique' => ' Bu telefon kayıtlı'
//                 ]);
//                 $data['company']->phone = Str::of($request->phone)->replaceMatches('/[^A-Za-z0-9]++/', '');
//             }


//             $data['company']->tc = $request->tc;
//             $data['company']->address = $request->address;
//             //$data['company']->phone = Str::of($request->phone)->replaceMatches('/[^A-Za-z0-9]++/', '');
//             $data['company']->land_phone = Str::of($request->land_phone)->replaceMatches('/[^A-Za-z0-9]++/', '');
//             $data['company']->fax = $request->fax;
//             $data['company']->note = $request->note;


//             if (!empty($request->file('company_logo'))) {

//                 $this->validate($request, [
//                     'company_logo' => 'mimes:jpeg,jpg,png', 'max:4096',
//                 ], [
//                     'company_logo.mimes' => 'Logo jpg, jpeg, png formatında olmalı',
//                     'company_logo.max' => 'Logo 4 MB büyük olamaz',
//                 ]);

//                 $image = base64_encode(file_get_contents($request->file('company_logo')->path()));

//                 $data['company']->company_logo = $image;
//             }
//             $data['company']->save();
//             $flasher->addSuccess('Veri sorumlusu güncellendi');
//             return Redirect::route('admin.company.list');

//         }

//         return view('admin.pages.adminCompanyEdit', $data)->with(compact('user'));

//     }
}

