@extends('admin.layout.layout')

@section('title')
    Ürünler ve Hizmetler
@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->
@endsection

@section('content')
    <div class="row clearfix">
        <div class="card">
            <minotaur-topbar><!-- Menu Trigger For Mobile -->
                <div class="">
                    <a href="{{ route('uruns.index') }}" class="btn btn-primary btn-block">
                        <span class="title">Ürün ve Hizmetler</span>
                    </a>
                </div>
            </minotaur-topbar>
            <!-- Sekme Navigasyonu -->
            <!-- Sekme Navigasyonu -->
            <ul class="nav nav-tabs" id="myTabs">
                <li class="nav-item">
                    <a class="nav-link " id="urunler-tab" data-toggle="tab" href="#urunler">Ürünler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" id="hizmetler-tab" data-toggle="tab" href="#hizmetler">Hizmetler</a>
                </li>
            </ul>
            <!-- Sekme İçeriği -->
            <div class="tab-content mt-2">
                <table class="table">
                    <div class="tab-pane fade " id="urunler">
                        <!-- Bilgiler Sekmesi İçeriği -->
                        <ul class="nav nav-tabs mt-3" id="urunlerAltTabs">
                            <li class="nav-item">
                                <a class="nav-link  active" id="urunBilgi-tab" data-toggle="tab"
                                    href="#urunBilgi">Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="urunFiyat-tab" data-toggle="tab" href="#urunFiyat">Fiyat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="urunStok-tab" data-toggle="tab" href="#urunStok">Stok Bilgileri</a>
                            </li>
                        </ul>

                        <div class="tab-content mt-3">
                            <!-- Ürün Ekle Tabı İçeriği -->
                            <div class="tab-pane fade show active" id="urunBilgi">
                                <form action="{{ route('uruns.store') }}" method="POST">
                                    @csrf
                                    <div class="form-row justify-content-center">

                                        <div class="col-md-2">
                                            <div class="form-group ">
                                                <label for="urun_kodu"> Kod:</label>
                                                <input type="text" class="form-control" id="urun_kodu" name="urun_kodu"
                                                    required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="urun_adi">Ad:</label>
                                                <input type="text" class="form-control" id="urun_adi" name="urun_adi"
                                                    required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="urun_etiketi">Etiketler:</label>
                                                <input type="text" class="form-control" id="urun_etiketi"
                                                    name="urun_etiketi" required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="barkod">Barkod:</label>
                                                <input type="text" class="form-control" id="barkod" name="barkod"
                                                    required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="stok_saklama_brimi">Stok Saklama Birimi:</label>
                                                <input type="text" class="form-control" id="stok_saklama_brimi"
                                                    name="stok_saklama_brimi" required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="mensei">Menşei:</label>
                                                <input type="text" class="form-control" id="mensei" name="mensei"
                                                    required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="gtip_no">GTIP No:</label>
                                                <input type="number" class="form-control" id="gtip_no" name="gtip_no"
                                                    required>
                                            </div>

                                            <div class="form-group">
                                                <label for="aciklama">Açıklama:</label>
                                                <input type="text" class="form-control" id="aciklama" name="aciklama"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Buraya form elemanları gelecek -->

                                    <div class="clearfix">
                                        <div class=" col-md-3">
                                        {{-- <button type="submit" class="btn btn-primary ml-4">Ekle</button> --}}
                                        <a href="#" class="btn btn-primary">Fiyat</a>
                                        <a href="{{ route('uruns.index') }}" class="btn btn-primary">Geri</a>
                                    </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Ürün Düzenle Tabı İçeriği -->
                            <div class="tab-pane fade" id="urunFiyat">
                                <h4>Ürün Düzenle</h4>
                                <!-- Ürün Düzenle Formu -->
                                <!-- ... -->
                            </div>

                            <!-- Ürün Sil Tabı İçeriği -->
                            <div class="tab-pane fade" id="urunStok">
                                <h4>Ürün Sil</h4>
                                <!-- Ürün Sil Formu -->
                                <!-- ... -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="hizmetler">
                        <!-- Alt Tab Kontrol -->
                        <ul class="nav nav-tabs mt-3 active" id="hizmetlerAltTabs">
                            <!-- Hizmetler Tabının Alt Tabları -->
                            <li class="nav-item">
                                <a class="nav-link active" id="hizmetBilgi-tab" data-toggle="tab"
                                    href="#hizmetBilgi">Bilgiler</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hizmetFiyat-tab" data-toggle="tab" href="#hizmetFiyat">Fiyat</a>
                            </li>
                            <!-- ... -->
                        </ul>

                        <!-- Alt Tab İçeriği -->
                        <div class="tab-content mt-3">
                            <!-- Alt Tabların İçeriği -->
                            <div class="tab-pane fade show active" id="urunBilgi">
                                <form action="{{ route('hizmet.store') }}" method="POST">
                                    @csrf
                                    <div class="form-row justify-content-center">

                                        <div class="col-md-2">
                                            <div class="form-group ">
                                                <label for="hizmet_kodu"> Kod:</label>
                                                <input type="text" class="form-control" id="hizmet_kodu"
                                                    name="hizmet_kodu" required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="hizmet_adi">Ad:</label>
                                                <input type="text" class="form-control" id="hizmet_adi"
                                                    name="hizmet_adi" required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="hizmet_birimi">Hizmet Birimi:</label>
                                                <input type="text" class="form-control" id="hizmet_birimi"
                                                    name="hizmet_birimi" required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="barkod">Barkod:</label>
                                                <input type="text" class="form-control" id="barkod" name="barkod"
                                                    required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="hizmet_etiketi">Etiketler:</label>
                                                <input type="text" class="form-control" id="hizmet_etiketi"
                                                    name="hizmet_etiketi" required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="aciklama">Açıklama:</label>
                                                <input type="text" class="form-control" id="aciklama"
                                                    name="aciklama" required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="kdv_id">Kdv:</label>
                                                <input type="number" class="form-control" id="kdv_id" name="kdv_id"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Buraya form elemanları gelecek -->

                                    <div class="clearfix">
                                        <button type="submit" class="btn btn-primary ml-4">Kaydet</button>
                                        <a href="{{ route('caris.index') }}" class="btn btn-primary">Vazgeç</a>
                                    </div>
                                </form>
                            </div>
                            <!-- ... -->
                        </div>
                    </div>
                </table>
                <div class="tab-pane fade" id="fiyat">
                    <h2>Profil İçeriği</h2>
                    <p>Bu sekme kullanıcı profilini temsil eder.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS ve jQuery -->
@endsection
@section('js')
    <!-- JavaScript ile Alt Tab Değişikliği -->
    <script>
        $(document).ready(function() {
            $('#urunlerAltTabs a').on('click', function(e) {
                e.preventDefault();
                $(this).tab('show');
            });

            $('#hizmetlerAltTabs a').on('click', function(e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>
@endsection
