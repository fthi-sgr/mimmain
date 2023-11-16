<!-- resources/views/caris/show.blade.php -->
<!-- resources/views/caris/show.blade.php -->

<!-- resources/views/caris/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cari Detayları</h2>
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $cari->cari_id }}</td>
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
                <td>{{ $cari->cari_dairesi }}</td>
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
        <a href="{{ route('caris.edit', $cari->id) }}" class="btn btn-warning mt-2">Düzenle</a>
        <a href="{{ route('caris.index', $cari->id) }}" class="btn btn-warning mt-2">Cariler</a>
    </div>
@endsection