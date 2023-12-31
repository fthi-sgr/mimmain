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
                <a href="{{ route('caris.index') }}" class="btn btn-primary btn-block">
                    <h2> <span class="title">Cariler</span> </h2>
                </a>
            </div>
            <div class="header">
                <h2> <strong>Yeni Genel Cari</strong></h2>
            </div>
            <hr>
            @if (session("status"))
            <div class="row" style="margin-top: 10px;">
                <div class="col-lg-12">
                    <div class="alert alert-success">{{session("status")}}</div>
                </div>
            </div>

            @endif
            <div class="body">
                <form action="{{ route('caris.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="" class="col-form-label">Cari Türü:</label>
                            <div>
                                <input type="radio" class="change-cariType" checked name="cari_turu" value="0"> Gerçek/Şahıs Şirketi
                            </div>
                            <div>
                                <input type="radio" class="change-cariType" name="cari_turu" value="1"> Tüzel
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group">
                                <label for="cari_kodu">Cari Kodu:</label>
                                <input type="text" class="form-control" id="cari_kodu" name="cari_kodu" required>
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="cari_etiket">Etiketler:</label>
                                <input type="text" class="form-control" id="cari_etiket" name="cari_etiket" required>
                            </div>

                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group">
                                <label for="tc">TC No:</label>
                                <input type="number" class="form-control" id="tc" name="tc">
                            </div>

                            <div class="form-group">
                                <label for="vergi_dairesi">Vergi Dairesi:</label>
                                <input type="text" class="form-control" id="vergi_dairesi" name="vergi_dairesi" required>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group">
                                <label for="cari_adi">Cari Adı:</label>
                                <input type="text" class="form-control" id="cari_adi" name="cari_adi" required>
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="vergi_no">Vergi Numarası:</label>
                                <input type="number" class="form-control" id="vergi_no" name="vergi_no" required>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group">
                                <label for="cari_tipi">Cari Tipi:</label>
                                <input type="text" class="form-control" id="cari_tipi" name="cari_tipi" required>
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="email">Eposta:</label>
                                <input type="text" class="form-control" id="email" name="email" required>

                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group">
                                <label for="kisa_ad">Kısa Ad:</label>
                                <input type="text" class="form-control" id="kisa_ad" name="kisa_ad" required>
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="form-group">
                                <label for="islemTarihi">İşlem Tarihi:</label>
                                <input type="date" class="form-control" id="islemTarihi" name="islemTarihi" required>
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>
                        </div>

                        <div class="form-group row">

                        </div>

                        <div class="col-md-3">







                            <div class="form-group">
                                <label for="vergi_dairesi">Vergi Dairesi:</label>
                                <input type="text" class="form-control" id="vergi_dairesi" name="vergi_dairesi" required>
                            </div>



                            <div class="form-group">
                                <label for="yetkili">Yetkili:</label>
                                <input type="text" class="form-control" id="yetkili" name="yetkili" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="yetkili_tel">Yetkili Tel:</label>
                                <input type="tel" class="form-control" id="yetkili_tel" name="yetkili_tel" placeholder="5**-***-****" required>
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
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(".change-cariType").click(function() {
        var value = $(this).val();

        if (value == 1) {
            $(".firma-area").show();
        } else {
            $(".firma-area").hide();
        }
    });
</script>
@endsection