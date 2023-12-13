<!-- resources/views/caris/edit.blade.php -->

@extends('admin.layout.layout')

@section('title')
    Banka Hesapları
@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

    <!-- Buttons CSS ve JavaScript dosyaları -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
@endsection


@section('content')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="">
                    <a href="{{ route('finans.banks.index') }}" class="btn btn-primary btn-block">
                        <h4><strong><span class="title">Banka Hesabı</span></strong></h4>
                    </a>
                </div>
                <div class="header">
                    <h2><strong>Banka Hesap Kaydı Düzenle</strong> <small>Banka hesapları üzerinde olası değişikleri buradan güncelleyebilirsiniz!
                        </small></h2>
                </div>
                <div class="body">
                    <!-- Form bölümü-->

                        <table class="table table-striped table-hover dataTable js-exportable">
                            <form action="{{ route('finans.banks.update', ['id' => $banka->id]) }}" method="POST">
                                @csrf

                                <div class="row">


                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="banka_hesap_adi">Banka Hesap Adı</label>
                                            <input type="text" class="form-control" id="banka_hesap_adi"
                                                name="banka_hesap_adi"
                                                value="{{ old('banka_hesap_adi', $banka->banka_hesap_adi) }}" required>
                                            <span class="text-danger">{{ $errors->first('banka_hesap_adi') }}</span>

                                        </div>
                                        <div class="form-group">
                                            <label for="acilis_tarihi">Açılış tarihi:</label>
                                            <input type="date" class="form-control" id="acilis_tarihi"
                                                name="acilis_tarihi" value="{{ $banka->acilis_tarihi }}" required>
                                            <span class="text-danger">{{ $errors->first('acilis_tarihi') }}</span>

                                        </div>
                                        <div class="form-group">
                                            <label for="bakiye">Bakiye</label>
                                            <input type="text" class="form-control" id="bakiye" name="bakiye"value="{{ $banka->bakiye }}" required>
                                            <span class="text-danger">{{ $errors->first('bakiye') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="para_birimi">Para Birimi</label>
                                            <select class="form-control" name="para_birimi" id="para_birimi">
                                                <option value="TL" {{ $banka->para_birimi === 'TL' ? 'selected' : '' }}>₺-Türk Lirası</option>
                                                <option value="DOLAR" {{ $banka->para_birimi === 'DOLAR' ? 'selected' : '' }}>$-Dolar</option>
                                                <option value="EURO" {{ $banka->para_birimi === 'EURO' ? 'selected' : '' }}>€-Euro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="banka_adi">Banka Adı:</label>
                                            <input type="text" class="form-control" id="banka_adi" name="banka_adi"
                                                value="{{ $banka->banka_adi }}" required>
                                            <span class="text-danger">{{ $errors->first('banka_adi') }}</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="banka_sube">Şube:</label>
                                            <input type="text" class="form-control" id="banka_sube" name="banka_sube"
                                                value="{{ $banka->banka_sube }}" required>
                                            <span class="text-danger">{{ $errors->first('banka_sube') }}</span>

                                        </div>


                                        <div class="form-group">
                                            <label for="hesap_no">Hesap Numarası:</label>
                                            <input type="number" class="form-control" id="hesap_no" name="hesap_no"
                                                value="{{ $banka->hesap_no }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="iban">IBAN</label>
                                            <input type="number" class="form-control" id="iban" name="iban"
                                                value="{{ $banka->iban }}" required>
                                        </div>
                                    </div>


                                    <div class=" col-lg-4">
                                        <div class="form-group">
                                            <label for="etiket">Etiketler:</label>
                                            <input type="text" class="form-control" id="etiket" name="etiket"
                                                value="{{ $banka->etiket }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="aciklama">Açıklama:</label>
                                            <input type="text" class="form-control" id="aciklama" name="aciklama"
                                                value="{{ $banka->aciklama }}" required>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-center my-4">
                                                    <a href="{{ route('finans.banks.index') }}" type="button"
                                                        class="btn btn-primary mb-4">Geri</a>
                                                    <button type="submit"
                                                        class="btn btn-primary mb-4 ml-2">Güncelle</button>
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
@section('js')
    <!-- DataTables JavaScript dosyaları -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

    <!-- DataTables Buttons JavaScript dosyaları -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
@endsection
