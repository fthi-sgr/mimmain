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
                    <h2> <strong>Yeni Banka Hesabı</strong></h2>

                </div>
                <div class="body">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <form action="{{ route('finans.banks.store') }}" method="POST">
                            @csrf

                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label for="banka_hesap_adi">Banka Hesap Adı</label>
                                        <input type="text" class="form-control" id="banka_hesap_adi"
                                            name="banka_hesap_adi" required>
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>

                                    <div class="form-group ">
                                        <label for="etiket">Etiketler</label>
                                        <input type="text" class="form-control" id="etiket" name="etiket" required>
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>

                                    <div class="form-group ">
                                        <label for="acilis_tarihi">Açılış Tarihi</label>
                                        <input type="date" class="form-control" id="acilis_tarihi" name="acilis_tarihi"
                                            required>
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="bakiye">Bakiye</label>
                                        <input type="text" class="form-control" id="bakiye" name="bakiye" required>
                                        <span class="text-danger">{{ $errors->first('bakiye') }}</span>
                                    </div>

                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="para_birimi">Para Birimi</label>
                                        <select class="form-control" name="para_birimi" id="para_birimi">
                                            <option value="TL">₺-Türk Lirası</option>
                                            <option value="DOLAR">$-Dolar</option>
                                            <option value="EURO">€-Euro</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="iban">IBAN</label>
                                        <input type="number" class="form-control" id="iban" name="iban" required>
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="banka_adi">Banka Adı</label>
                                        <input type="text" class="form-control" id="banka_adi" name="banka_adi" required>
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="banka_sube">Şube</label>
                                        <input type="text" class="form-control" id="banka_sube" name="banka_sube"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="hesap_no">Hesap No </label>
                                        <input type="number" class="form-control" id="hesap_no" name="hesap_no" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="aciklama">Açıklama</label>
                                        <input type="text" class="form-control" id="aciklama" name="aciklama" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-center my-4">
                                                <button type="submit" class="btn btn-primary mb-4">Kaydet</button>
                                                <a href="{{ route('finans.banks.index') }}"
                                                    class="btn btn-primary mb-4 ml-2">Geri</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
