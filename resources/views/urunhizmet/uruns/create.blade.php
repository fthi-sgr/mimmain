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
                    <a href="{{ route('urunhizmet.uruns.index') }}" class="btn btn-primary btn-block">
                        <strong><span class="title">Ürün ve Hizmetler</span></strong>
                    </a>
                </div>
            </minotaur-topbar>
            <!-- Sekme İçeriği -->
            <div class="tab-content mt-2">
                <table class="table">
                    <div class="tab-pane fade show active" id="urunlar">
                        <!-- Bilgiler Sekmesi İçeriği -->
                        <ul class="nav nav-tabs mt-3" id="urunlerAltTabs">
                            <li class="nav-item">
                                <a class="nav-link active" id="urunBilgi-tab" data-toggle="tab" href="#urunBilgi">Bilgiler</a>
                            </li>

                        </ul>
                        <div class="tab-content mt-3">
                            <!-- Ürün Ekle Tabı İçeriği -->
                            <div class="tab-pane fade show active" id="urunBilgi">
                                <form action="{{ route('urunhizmet.uruns.store') }}" method="POST">
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
                                        {{-- <button type="submit" class="btn btn-primary ml-4">Ekle</button> --}}
                                        <button type="submit" class="btn btn-primary ml-4">Kaydet</button>
                                        <a href="{{ route('urunhizmet.uruns.index') }}" class="btn btn-primary">Geri</a>
                                    </div>
                                </form>

                        </div>
                    </div>

                </table>

            </div>
        </div>
    </div>

    <!-- Bootstrap JS ve jQuery -->
@endsection
@section('js')


<!-- JavaScript ile Alt Tab Değişikliği -->
<script>
    $(document).ready(function() {
        $('#urunlerAltTabs a').on('click', function (e) {
            e.preventDefault();
            $(this).tab('show');
        });

        $('#hizmetlerAltTabs a').on('click', function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>
@endsection
