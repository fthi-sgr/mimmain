<!-- resources/views/caris/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cari Listesi</h2>
        <a href="{{ route('caris.create') }}" class="btn btn-primary mb-2">Yeni Cari Ekle</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cari Kodu</th>
                    <th>Cari Adı</th>
                    <th>Cari Tipi</th>
                    <th>Kısa Ad</th>
                    <th>Etiket</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($caris as $cari)
                    <tr>
                        <td>{{ $cari->cari_id }}</td>
                        <td>{{ $cari->cari_kodu }}</td>
                        <td>{{ $cari->cari_adi }}</td>
                        <td>{{ $cari->cari_tipi}}</td> 
                        <td>{{ $cari->kisa_ad}}</td>
                        <td>{{ $cari->cari_etiket}}</td>

                        
                        <td>                  
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    İşlemler
                                </button>
                                <div class="dropdown-menu" aria-labelledby="actionDropdown">
                                    <a class="dropdown-item" href="{{ route('caris.show',[$cari->cari_id]) }}">Ayrıntılar</a>
                                
                                    <a class="dropdown-item" href="{{ route('caris.edit', [$cari->cari_id]) }}">Düzenle</a>

                                    <a class="dropdown-item" href="{{ route('caris.destroy', [$cari->cari_id]) }}" onclick="return confirm('Silmek istediğinizden emin misiniz?')">Sil</a>
                                
                                </div>
                            
                            </div>
                         </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
