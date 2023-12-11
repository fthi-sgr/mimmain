@extends('admin.layout.layout')

@section('title')
    Cari listesi
@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->
@endsection

@section('content')
    <div class="row clearfix">

        <div class="col-lg-12">
            <div class="card">
                <div class="">
                    <a href="{{ route('uruns.index') }}" class="btn btn-primary btn-block">
                        <h2> <span class="title">Cariler</span> </h2>
                    </a>
                </div>
                <div class="header">
                    <h2> <strong>Yeni Genel Cari</strong></h2>


                </div>
                <hr>


                <table class="table">
                    <form action="{{ route('caris.store') }}" method="POST">
                        @csrf

                        <div class="form-row justify-content-center">

                            <div class="col-md-2">
                                <div class="form-group ">
                                    <label for="cari_kodu">Cari Kodu:</label>
                                    <input type="text" class="form-control" id="cari_kodu" name="cari_kodu" required>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>

                                <div class="form-group">
                                    <label for="cari_turu">Cari Türü:</label>
                                    <input type="text" class="form-control" id="cari_turu" name="cari_turu" required>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>

                                <div class="form-group">
                                    <label for="cari_adi">Cari Adı:</label>
                                    <input type="text" class="form-control" id="cari_adi" name="cari_adi" required>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>

                                <div class="form-group">
                                    <label for="cari_tipi">Cari Tipi:</label>
                                    <input type="text" class="form-control" id="cari_tipi" name="cari_tipi" required>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="kisa_ad">Kısa Ad:</label>
                                    <input type="text" class="form-control" id="kisa_ad" name="kisa_ad" required>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>

                                <div class="form-group">
                                    <label for="cari_etiket">Etiket:</label>
                                    <input type="text" class="form-control" id="cari_etiket" name="cari_etiket" required>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>

                                <div class="form-group">
                                    <label for="vergi_no">Vergi Numarası:</label>
                                    <input type="number" class="form-control" id="vergi_no" name="vergi_no" required>
                                </div>

                                <div class="form-group">
                                    <label for="vergi_dairesi">Vergi Dairesi:</label>
                                    <input type="text" class="form-control" id="vergi_dairesi" name="vergi_dairesi"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-3">

                                <div class="form-group">
                                    <label for="yetkili">Yetkili:</label>
                                    <input type="text" class="form-control" id="yetkili" name="yetkili" required>

                                </div>


                                <div class="form-group">
                                    <label for="vergi_no">Vergi Numarası:</label>
                                    <input type="number" class="form-control" id="vergi_no" name="vergi_no" required>
                                </div>



                                <div class="form-group">
                                    <label for="vergi_dairesi">Vergi Dairesi:</label>
                                    <input type="text" class="form-control" id="vergi_dairesi" name="vergi_dairesi"
                                        required>
                                </div>



                                <div class="form-group">
                                    <label for="yetkili">Yetkili:</label>
                                    <input type="text" class="form-control" id="yetkili" name="yetkili" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="yetkili_tel">Yetkili Tel:</label>
                                    <input type="tel" class="form-control" id="yetkili_tel" name="yetkili_tel"
                                        placeholder="5**-***-****" required>
                                </div>



                                <div class="form-group">
                                    <label for="email">E-Mail:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>



                                <div class="form-group">
                                    <label for="vade_gunu">Vade günü:</label>
                                    <input type="number" class="form-control" id="vade_gunu" name="vade_gunu" required>

                                </div>


                                <div class="form-group">
                                    <label for="iskonto">İskonto:</label>
                                    <input type="number" class="form-control" id="iskonto" name="iskonto" required>
                                </div>

                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="referans">Referans:</label>
                                    <input type="text" class="form-control" id="referans" name="referans" required>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="aciklama">Açıklama:</label>
                                    <input type="text" class="form-control" id="aciklama" name="aciklama" required>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix">
                            <button type="submit" class="btn btn-primary ml-4">Ekle</button>
                            <a href="{{ route('caris.index') }}" class="btn btn-primary">Geri</a>
                        </div>
                    </form>
                </table>
            </div>
        </div>
    </div>
@endsection
