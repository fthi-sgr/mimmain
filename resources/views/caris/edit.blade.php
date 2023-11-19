<!-- resources/views/caris/edit.blade.php -->

@extends('layouts.app')

@section('content')


    <div class="container">
        <h2>Cari Düzenle</h2>
 
        <form action="{{ route('caris.update', [ $cari->id ]) }}" method="POST">
            @csrf
           
                  
            <div class="form-group">
                <label for="cari_kodu">Cari Kodu:</label>
                <input type="text" class="form-control" id="cari_kodu" name="cari_kodu" value="{{ old('cari_kodu', $cari->cari_kodu)  }}"  required>
                <span class="text-danger">{{ $errors->first('cari_kodu') }}</span>

            </div>
            <div class="form-group">
                <label for="cari_turu">Cari Türü:</label>
                <input type="text" class="form-control" id="cari_turu" name="cari_turu" value="{{ $cari->cari_turu }}" required>
                <span class="text-danger">{{ $errors->first('cari_turu') }}</span>

            </div>
            <div class="form-group">
                <label for="cari_adi">Cari Adı:</label> 
                <input type="text" class="form-control" id="cari_adi" name="cari_adi" value="{{ $cari->cari_adi }}"  required>
                <span class="text-danger">{{ $errors->first('name') }}</span>

            </div>
            <div class="form-group">
                <label for="cari_tipi">Cari Tipi:</label>
                <input type="text" class="form-control" id="cari_tipi" name="cari_tipi" value="{{ $cari->cari_tipi }}" required>
                <span class="text-danger">{{ $errors->first('name') }}</span>

            </div>
            <div class="form-group">
                <label for="kisa_ad">Kısa Ad:</label>
                <input type="text" class="form-control" id="kisa_ad" name="kisa_ad" value="{{ $cari->kisa_ad }}" required>
                <span class="text-danger">{{ $errors->first('name') }}</span>

            </div>
            <div class="form-group">
                <label for="cari_etiket">Etiket:</label>
                <input type="text" class="form-control" id="cari_etiket" name="cari_etiket" value="{{ $cari->cari_etiket }}" required>
                <span class="text-danger">{{ $errors->first('name') }}</span>

            </div>            
            <div class="form-group">
                <label for="vergi_no">Vergi Numarası:</label>
                <input type="number" class="form-control" id="vergi_no" name="vergi_no"  value="{{ $cari->vergi_no }}" required>
            </div>
            <div class="form-group">
                <label for="vergi_dairesi">Vergi Dairesi:</label>
                <input type="text" class="form-control" id="vergi_dairesi" name="vergi_dairesi" value="{{ $cari->vergi_dairesi }}" required>
            </div>
            <div class="form-group">
                <label for="yetkili">Yetkili:</label>
                <input type="text" class="form-control" id="yetkili" name="yetkili" value="{{ $cari->yetkili }}" required>
            </div>
            <div class="form-group">
                <label for="yetkili_tel">Yetkili Tel:</label>
                <input type="tel" class="form-control" id="yetkili_tel" name="yetkili_tel" placeholder="5**-***-****"  value="{{ $cari->yetkili_tel }}" required>
            </div>
            <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $cari->email }}" required>
            </div>
            <div class="form-group">
                <label for="vade_gunu">Vade günü:</label>
                <input type="number" class="form-control" id="vade_gunu" name="vade_gunu" value="{{ $cari->vade_gunu }}" required>
            </div>
            <div class="form-group">
                <label for="iskonto">İskonto:</label>
                <input type="number" class="form-control" id="iskonto" name="iskonto" value="{{ $cari->iskonto }}" required>
            </div>
            <div class="form-group">
                <label for="referans">Referans:</label>
                <input type="text" class="form-control" id="referans" name="referans" value="{{ $cari->referans }}" required>
            </div>
            <div class="form-group">
                <label for="aciklama">Açıklama:</label>
                <input type="text" class="form-control" id="aciklama" name="aciklama" value="{{ $cari->aciklama }}" required>
            </div>

            <a href="{{ route('caris.index') }}" type="button" class="btn btn-primary mb-4">Geri</a>

            <button type="submit" class="btn btn-primary mb-4">Güncelle</button>
        </form>

    </div>
@endsection
