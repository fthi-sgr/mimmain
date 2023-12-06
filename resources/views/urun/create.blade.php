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
                    <a href="{{ route('urun.index') }}" class="btn btn-primary btn-block">
                        <span class="title">Ürün ve Hizmetler</span>
                    </a>
                </div>
            </minotaur-topbar>
            <!-- Sekme Navigasyonu -->
            <!-- Sekme Navigasyonu -->
            <ul class="nav nav-tabs" id="myTabs">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home">Ürün</a>
                    <hr>
                    <ul class="nav nav-tabs" id="uruntab">
                        <li class="nav-item">
                            <a class="nav-link active" id="urun-info-tab" data-toggle="tab" href="#urun-info">Bilgiler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="urun-fiyat-tab" data-toggle="tab" href="#urun-fiyat">Fiyat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="urun-stok-tab" data-toggle="tab" href="#urun-stok">Stok</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile">Hizmet</a>
                    <hr>
                    <ul class="nav nav-tabs" id="hizmettab" style="display: none;">
                        <li class="nav-item">
                            <a class="nav-link active" id="hizmet-info-tab" data-toggle="tab"
                                href="#hizmet-info">Bilgiler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hizmet-fiyat-tab" data-toggle="tab" href="#hizmet-fiyat">Fiyat</a>
                        </li>
                    </ul>
                </li>
            </ul>



            <!-- Sekme İçeriği -->
            <div class="tab-content mt-2">
                <div class="tab-pane fade show active" id="info">
                    <!-- Bilgiler Sekmesi İçeriği -->
                    <div class="tab-content" id="urunAltTabIcerik">
                        <div class="tab-pane fade show active" id="bilgiler" role="tabpanel" aria-labelledby="info-tab">
                            <form action="{{ route('urun.store') }}" method="POST">
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
                                            <input type="text" class="form-control" id="urun_etiketi" name="urun_etiketi"
                                                required>
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
                                    <button type="submit" class="btn btn-primary ml-4">Ekle</button>
                                    <a href="{{ route('caris.index') }}" class="btn btn-primary">Geri</a>
                                </div>
                            </form>
                        </div>

                        <!-- Fiyat Sekmesi İçeriği -->
                        <div class="tab-pane fade" id="fiyat" role="tabpanel" aria-labelledby="fiyat-tab">
                            <!-- Fiyatla ilgili form elemanları gelecek -->
                        </div>

                        <!-- Stok Sekmesi İçeriği -->
                        <div class="tab-pane fade" id="stok" role="tabpanel" aria-labelledby="stok-tab">
                            <!-- Stokla ilgili form elemanları gelecek -->
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile">
                    <h2>Profil İçeriği</h2>
                    <p>Bu sekme kullanıcı profilini temsil eder.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS ve jQuery -->
@endsection
@section('js')
<script>
    // Sayfa yüklendiğinde yapılacak işlemler
    document.addEventListener('DOMContentLoaded', function () {
        // "Hizmet" sekmesine tıklanınca alt sekmeleri göster
        document.getElementById('profile-tab').addEventListener('click', function () {
            document.getElementById('hizmettab').style.display = 'block';
        });
    });
</script>


@endsection
