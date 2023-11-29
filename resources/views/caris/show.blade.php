@extends('admin.layout.layout')

@section('title')
Cari listesi
@endsection

@section('css')
<!-- DataTables CSS ve JavaScript dosyaları -->

@endsection

@section('content')


    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-hover dataTable js-exportable">

            <tr>
                <th>ID</th>
                <td>{{ $cari->id }}</td>
            </tr>
            <tr>
                <th>Cari Kodu</th>
                <td>{{ $cari->cari_kodu }}</td>
            </tr>
            <tr>
                <th>Cari Türü</th>
                <td>{{ $cari->cari_turu }}</td>
            </tr>
            <tr>
                <th>Cari Adı</th>
                <td>{{ $cari->cari_adi }}</td>
            </tr>
            <tr>
                <th>Cari Tipi</th>
                <td>{{ $cari->cari_tipi }}</td>
            </tr>
            <tr>
                <th>Kısa Ad</th>
                <td>{{ $cari->kisa_ad }}</td>
            </tr>
            <tr>
                <th>Cari Etiket</th>
                <td>{{ $cari->cari_etiket }}</td>
            </tr>
            <tr>
                <th>Vergi Numarası</th>
                <td>{{ $cari->vergi_no }}</td>
            </tr>
            <tr>
                <th>Vergi Dairesi</th>
                <td>{{ $cari->vergi_dairesi }}</td>
            </tr>
            <tr>
                <th>Yetkili</th>
                <td>{{ $cari->yetkili }}</td>
            </tr>
            <tr>
                <th>Yetkili Tel</th>
                <td>{{ $cari->yetkili_tel }}</td>
            </tr>
            <tr>
                <th>E-Mail</th>
                <td>{{ $cari->email }}</td>
            </tr>
            <tr>
                <th>Vade Günü</th>
                <td>{{ $cari->vade_gunu }}</td>
            </tr>
            <tr>
                <th>İskonto</th>
                <td>{{ $cari->iskonto }}</td>
            </tr>
            <tr>
                <th>Referans</th>
                <td>{{ $cari->referans }}</td>
            </tr>
            <tr>
                <th>Açıklama</th>
                <td>{{ $cari->aciklama }}</td>
            </tr>
        </table>
        </div>
        <a href="{{ route('caris.edit', [ $cari->id ]) }}" class="btn btn-primary mb-4">Düzenle</a>
        <a href="{{ route('caris.index',[ $cari->id ]) }}" class="btn btn-primary mb-4">Cariler</a>
    </div>
@endsection
@section('js')
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection
