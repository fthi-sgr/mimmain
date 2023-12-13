@extends('admin.layout.layout')

@section('title')
    Cari listesi
@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->
@endsection

@section('content')
    <div class="row clearfix">
        <div class=" col-lg-12">
            <div class="card">



                <div class="container">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover dataTable js-exportable">

                            <tr>
                                <th>ID</th>
                                <td>{{ $banka->id }}</td>
                            </tr>
                            <tr>
                                <th>Banka Hesap Adı</th>
                                <td>{{ $banka->banka_hesap_adi }}</td>
                            </tr>
                            <tr>
                                <th>Etiketler</th>
                                <td>{{ $banka->etiket }}</td>
                            </tr>
                            <tr>
                                <th>Açılış Tarihi</th>
                                <td>{{ $banka->acilis_tarihi }}</td>
                            </tr>
                            <tr>
                                <th>Bakiye</th>
                                <td>{{$banka->bakiye}}</td>
                            </tr>
                            <tr>
                                <th>Para Birirmi</th>
                                <td>{{ $banka->para_birimi }}</td>
                            </tr>
                            <tr>
                                <th>IBAN</th>
                                <td>{{ $banka->iban }}</td>
                            </tr>

                            <tr>
                                <th>Banka Adı</th>
                                <td>{{ $banka->banka_adi }}</td>
                            </tr>
                            <tr>
                                <th>Şube</th>
                                <td>{{ $banka->banka_sube }}</td>
                            </tr>
                            <tr>
                                <th>Hesap numarası</th>
                                <td>{{ $banka->hesap_no }}</td>
                            </tr>

                            <tr>
                                <th>Açıklama</th>
                                <td>{{ $banka->aciklama }}</td>
                            </tr>
                        </table>
                    </div>
                    <a href="{{ route('finans.banks.edit', [$banka->id]) }}" class="btn btn-primary mb-4">Düzenle</a>
                    <a href="{{ route('finans.banks.index', [$banka->id]) }}" class="btn btn-primary mb-4">Geri</a>
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
