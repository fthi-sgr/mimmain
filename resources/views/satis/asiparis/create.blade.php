@extends('admin.layout.layout')

@section('title')
@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->
@endsection
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="">
                    <a href="{{ route('finans.banks.index') }}" class="btn btn-primary btn-block">
                        <h4><strong><span class="title">Siparişler</span></strong></h4>
                    </a>
                </div>
                <div class="header">
                    <h4> <strong>Yeni Alınan Sipariş</strong></h4>
                </div>

                <div class="body">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <form action="{{ route('satis.asiparis.store') }}" method="POST"></form>
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="cari_adi" style="color: #59c4bc">Cari Adı*</label>
                                    <input type="text" class="form-control" id="cari_adi" name="cari_adi" required>
                                    <span class="text-danger">{{ $errors->first('cari_adi') }}</span>
                                </div>

                                <div class="form-group">
                                    <label for="cari_adresi"style="color: #59c4bc">Cari Adresi*</label>
                                    <input type="text" class="form-control" id="cari_adresi" name="cari_adresi" required>
                                    <span class="text-danger">{{ $errors->first('cari_adresi') }}</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="siparis_tarihi" style="color: #59c4bc">Sipariş/Düzenlenme
                                                Tarihi*</label>
                                            <input type="date" class="form-control" id="siparis_tarihi"
                                                name="siparis_tarihi" required>
                                            <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <div class="form-group">
                                                <label for="siparis_tarihi" style="color: #59c4bc">Seri No*</label>
                                                <input type="number" class="form-control" id="siparis_tarihi"
                                                    name="siparis_tarihi" required>
                                                <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="siparis_tarihi" style="color: #59c4bc">Teslimat Tarihi*</label>
                                            <input type="date" class="form-control" id="siparis_tarihi"
                                                name="siparis_tarihi" required>
                                            <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="siparis_tarihi" style="color: #59c4bc">Para Birimi*</label>
                                            <select class="form-control" name="para_birimi" id="para_birimi">
                                                <option value="TL">₺-Türk Lirası</option>
                                                <option value="DOLAR">$-Dolar</option>
                                                <option value="EURO">€-Euro</option>
                                            </select>
                                            <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12"></div>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="form-group">
                                    <label for="cari_adı" style="color: #59c4bc">Projeler*</label>
                                    <input type="text" class="form-control" id="cari_adı" name="cari_adı" required>
                                    <span class="text-danger">{{ $errors->first('cari_adı') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="cari_adı" style="color: #59c4bc">Etiketler*</label>
                                    <input type="text" class="form-control" id="cari_adı" name="cari_adı" required>
                                    <span class="text-danger">{{ $errors->first('cari_adı') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="cari_adı" style="color: #59c4bc">Açıklama*</label>
                                    <input type="text" class="form-control" id="cari_adı" name="cari_adı" required>
                                    <span class="text-danger">{{ $errors->first('cari_adı') }}</span>
                                </div>
                                <div class="card">
                                    <div class="header">
                                        <h2>Limit file type <small>try to upload png or pdf only</small></h2>
                                    </div>
                                    <div class="body">
                                        <input type="file" class="dropify" data-allowed-file-extensions="pdf png">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </table>
                    <hr class="line-dashed">

                    <div class="header text-center">
                        <h4> <strong>Ürün/Hizmet Bİlgileri</strong></h4>
                    </div>
                    <hr>
                    <div>
                        <h6><strong>Ürün Bilgileri</strong></h6>
                    </div>
                    <div class="clearfix">
                        <div class="row-mt-10">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label for="cari_adı" style="color: #59c4bc">Açıklama*</label>
                                <div class="input-group input-group-flex ">

                                </div>
                            </div>

                        </div>
                    </div>


                </div>

            </div>


        </div>

    </div>
@endsection
