@extends('admin.layout.layout')

@section('title')
    Ürünler ve Hizmetler
@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->
@endsection

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">

                <div class="">
                    <a href="{{ route('urunhizmet.depos.index') }}" class="btn btn-primary btn-block">
                        <strong><span class="title">Ürün ve Hizmetler</span></strong>
                    </a>
                </div>
                <div class="header">
                    <h2><strong>Yeni Depo</strong></h2>

                </div>
                <div class=" body">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <div class="tab-pane fade show active" id="depolar"> <!-- Bilgiler Sekmesi İçeriği -->
                            <ul class="nav nav-tabs mt-3" id="depolarAltTabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="depoBilgi-tab" data-toggle="tab"
                                        href="#depoBilgi">Bilgiler</a>
                                </li>

                            </ul>
                            <div class="tab-content mt-3">
                                <!-- Ürün Ekle Tabı İçeriği -->
                                <div class="tab-pane fade show active" id="depoBilgi">
                                    <form action="{{ route('urunhizmet.depos.store') }}" method="POST">
                                        @csrf
                                        <div class="row">

                                            <div class="col-lg-3">
                                                <div class="form-group ">
                                                    <label for="depo_kodu"> Kod:</label>
                                                    <input type="text" class="form-control" id="depo_kodu"
                                                        name="depo_kodu" required>
                                                    <span class="text-danger">{{ $errors->first('depo_kodu') }}</span>
                                                </div>

                                                <div class="form-group">
                                                    <label for="depo_adi">Ad:</label>
                                                    <input type="text" class="form-control" id="depo_adi"
                                                        name="depo_adi" required>
                                                    <span class="text-danger">{{ $errors->first('depo_adi') }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="acilis_tarihi">Açlış Tarihi:</label>
                                                    <input type="date" class="form-control" id="acilis_tarihi"
                                                        name="acilis_tarihi" required>
                                                    <span class="text-danger">{{ $errors->first('acilis_tarihi') }}</span>
                                                </div>

                                                <div class="form-group">
                                                    <label for="adres">Adres:</label>
                                                    <input type="text" class="form-control" id="adres" name="adres"
                                                        required>
                                                    <span class="text-danger">{{ $errors->first('adres') }}</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="il">İl:</label>
                                                    <select id="il" class="form-control">
                                                        <option value="" disabled selected>İl Seçiniz</option>
                                                    </select>
                                                </div>

                                                <label for="ilce">İlçe:</label>
                                                <select id="ilce" class="form-control">
                                                    <option value="" disabled selected>İlçe Seçiniz</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="stok_saklama_brimi">Stok Saklama Birimi:</label>
                                                    <input type="text" class="form-control" id="stok_saklama_brimi"
                                                        name="stok_saklama_brimi" required>
                                                    <span class="text-danger">{{ $errors->first('stok_saklama_brimi') }}</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex justify-content-center my-4">
                                                            <button type="submit" class="btn btn-primary mb-4">Kaydet</button>
                                                            <a href="{{ route('urunhizmet.depos.index') }}"
                                                                class="btn btn-primary mb-4 ml-2">Geri</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </div>
                    </table>
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

            $('#depolarAltTabs a').on('click', function(e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>

<script>
    $(document).ready(function() {
        $('#il').change(function() {
            var il = $(this).val();

            // İl seçildiğinde ilçeleri çekmek için AJAX isteği gönder
            $.ajax({
                url: '/urunhizmet/get-ilceler/' + il,
                type: 'GET',
                success: function(response) {
                    // Gelen veriyi ilçe dropdown'ına ekleyin
                    $('#ilce').empty();
                    $.each(response, function(key, value) {
                        $('#ilce').append('<option value="' + value + '">' + value + '</option>');
                    });
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    // Hata durumunda bir şeyler yapabilirsiniz
                }
            });
        });
    });
</script>


@endsection
