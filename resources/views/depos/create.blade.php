@extends('admin.layout.layout')

@section('title')
    Depolar
@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->
@endsection

<!-- Page header section  -->
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12">

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


                    <ul class="nav nav-tabs">
                        <div >
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Home-withicon"><i
                                        class="fa fa-balance-scale"></i> Ürünler</a></li>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="Home-withicon">
                                <form action="{{ route('uruns.store') }}" method="POST">
                                    @csrf
                                    <div class="form-row justify-content-center">

                                        <div class="col-md-2">
                                            <div class="form-group ">
                                                <label for="depo_kodu"> Kod:</label>
                                                <input type="text" class="form-control" id="depo_kodu" name="depo_kodu"
                                                    required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="depo_adi">Ad:</label>
                                                <input type="text" class="form-control" id="depo_adi" name="depo_adi"
                                                    required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="acilis_tarihi">Açlış Tarihi:</label>
                                                <input type="text" class="form-control" id="acilis_tarihi"
                                                    name="acilis_tarihi" required>
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            </div>

                                            <div class="form-group">
                                                <label for="adres">Adres:</label>
                                                <input type="text" class="form-control" id="adres" name="adres"
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

                                            <label for="il">İl:</label>
                                            <select id="il" class="form-control">
                                                <option value="" disabled selected>İl Seçiniz</option>
                                            </select>

                                            <label for="ilce">İlçe:</label>
                                            <select id="ilce" class="form-control">
                                                <option value="" disabled selected>İlçe Seçiniz</option>
                                            </select>
                                        </div>
                                </form>
                            </div>

                        </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('js')
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js">
</script>

<script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js') }}"></script>
@endsection
