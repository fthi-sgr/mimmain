@extends('admin.layout.layout')

@section('title')
    Banka Hesapları
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
                        <h4><strong><span class="title">Banka Hesapları</span></strong></h4>
                    </a>
                </div>
                <div class="header">
                    <h2> <strong>Yeni Alınan Sipariş</strong></h2>
                </div>

                <div class="body">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <form action="{{ route('satis.asiparis.store') }}" method="POST"></form>
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="cari_adi">Cari</label>
                                    <input type="text" class="form-control" id="cari_adi" name="cari_adi" required>
                                    <span class="text-danger">{{ $errors->first('cari_adi') }}</span>
                                </div>

                                <div class="form-group">
                                    <label for="cari_adresi">Cari Adresi</label>
                                    <input type="text" class="form-control" id="cari_adresi" name="cari_adresi" required>
                                    <span class="text-danger">{{ $errors->first('cari_adresi') }}</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="siparis_tarihi">Sipariş/Düzenlenme Tarihi</label>
                                        <input type="date" class="form-control" id="siparis_tarihi" name="siparis_tarihi" required>
                                        <span class="text-danger">{{ $errors->first('siparis_tarihi') }}</span>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4">

                                    <div class="form-group">
                                        <label for="cari_adı">Cari</label>
                                        <input type="text" class="form-control" id="cari_adı" name="cari_adı" required>
                                        <span class="text-danger">{{ $errors->first('cari_adı') }}</span>
                                    </div>



                            </div>

                    </table>

                </div>
            </div>

        </div>

    </div>
@endsection
