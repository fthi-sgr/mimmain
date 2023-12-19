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
                                        <div class="form-group">
                                            <label for="siparis_tarihi" style="color: #59c4bc">Seri No*</label>
                                            <input type="number" class="form-control" id="siparis_tarihi"
                                                name="siparis_tarihi" required>
                                            <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
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
                                            <span class="text-danger">{{ $errors->first('para_birimi') }}</span>
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
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                {{-- Sipariş ürünnü ekleme bölümü --}}
                <div class="header text-center">
                    <h4> <strong>Ürün/Hizmet Bİlgileri</strong></h4>
                </div>
                <hr>
                <div class="header">
                    <h6><strong>Ürün Bilgileri</strong></h6>
                </div>
                <div class="clearfix">
                    <div class="body">
                        <table class="table table-striped table-hover dataTable js-exportable">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="cari_adı" style="color: #59c4bc">Ürün/hizmet*</label>
                                        <div class="input-group input-group-flex ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="siparis_tarihi" style="color: #59c4bc">Miktar*</label>
                                                <input type="number" class="form-control" id="siparis_tarihi"
                                                    name="siparis_tarihi" required>
                                                <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="siparis_tarihi" style="color: #59c4bc">Birim Fiyat*</label>
                                                <input type="number" class="form-control" id="siparis_tarihi"
                                                    name="siparis_tarihi" required>
                                                <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="siparis_tarihi" style="color: #59c4bc">KDV Oranı*</label>
                                                <input type="number" class="form-control" id="siparis_tarihi"
                                                    name="siparis_tarihi" required>
                                                <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="cari_adı" style="color: #59c4bc">Stok/depo*</label>
                                        <div class="input-group input-group-flex ">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="siparis_tarihi" style="color: #59c4bc">Seri No*</label>
                                                <input type="number" class="form-control" id="siparis_tarihi"
                                                    name="siparis_tarihi" required>
                                                <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="siparis_tarihi" style="color: #59c4bc">Seri No*</label>
                                                <input type="number" class="form-control" id="siparis_tarihi"
                                                    name="siparis_tarihi" required>
                                                <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="siparis_tarihi" style="color: #59c4bc">Seri No*</label>
                                                <input type="number" class="form-control" id="siparis_tarihi"
                                                    name="siparis_tarihi" required>
                                                <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="float-right">
                                <button type="button" class="btn btn-success mb-2 btn-round"><i
                                        class="fa fa-check-circle"></i> <span>Ürünü Ekle</span></button>
                                <button type="button" class="btn btn-warning mb-2 btn-round"><i
                                        class="fa fa-refresh"></i> <span>Ürünü Güncelle</span></button>
                                <button type="button" class="btn btn-danger mb-2 btn-round"><i
                                        class="fa fa-trash-o"></i> <span>Danger</span></button>
                                <button type="button" class="btn btn-info mb-2 btn-round"> <i
                                        class="fa fa-warning"></i><span> Vazgeç</span></button>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">

                <div class="header">
                    <h5><strong>Ürün/Hizmet Listesi</strong></h5>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped tablo-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th><strong> Ürün Kodu</strong></th>
                                    <th><strong> Ürün Adı</strong></th>
                                    <th><strong> Stok/Depo</strong></th>
                                    <th><strong> Açıklam</strong></th>
                                    <th><strong> Miktar</strong></th>
                                    <th><strong> Birim</strong></th>
                                    <th><strong> Birim Fiyatı</strong></th>
                                    <th><strong> Vergi</strong></th>
                                    <th><strong> Tutar(KDV Dahil)</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>sssss</td>
                                    <td>ssssaaa</td>
                                </tr>
                            </tbody>

                        </table>
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
