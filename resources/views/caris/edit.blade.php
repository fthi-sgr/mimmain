<!-- resources/views/caris/edit.blade.php -->

@extends('admin.layout.layout')

@section('title')
Cari listesi
@endsection

@section('css')
<!-- DataTables CSS ve JavaScript dosyaları -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

<!-- Buttons CSS ve JavaScript dosyaları -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
<script type="text/javascript"  src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

@endsection

@section('content')

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Cari Düzenle <small>Cari nin herahangi bir sütununu değiştirebilirsiniz.</small></h2>

            </div>
            <div class="body">
                <!-- Form bölümü-->
                <div>
                    <table class="table table-striped table-hover dataTable js-exportable">
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
                            <input type="text" class="form-control" id="yetkili" name="yetkili" value="{{ $cari->yetkili }}" >
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


                    </form>
                    </table>
                    <a href="{{ route('caris.index') }}" type="button" class="btn btn-primary mb-4">Geri</a>

                        <a href="{{route('caris.index') }}" type="button" class="btn btn-primary mb-4">Güncelle</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

<script src="https://cdn.datatables.net/1.11.6/js/dataTables.tableEditable.min.js"></script>

@endsection
