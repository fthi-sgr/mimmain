<!-- resources/views/caris/show.blade.php -->
<!-- resources/views/caris/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cari Detayları</h2>

        <div>
            <strong>ID:</strong> {{ $cari->id }}<br>
            <strong>Ad:</strong> {{ $cari->ad }}<br>
            <strong>Soyad:</strong> {{ $cari->soyad }}<br>
            <strong>Telefon:</strong> {{ $cari->telefon }}<br>
            <strong>Oluşturulma Tarihi:</strong> {{ $cari->created_at }}<br>
            <strong>Güncellenme Tarihi:</strong> {{ $cari->updated_at }}<br>
        </div>

        <a href="{{ route('caris.edit', $cari->id) }}" class="btn btn-warning mt-2">Düzenle</a>
        <a href="{{ route('caris.index', $cari->id) }}" class="btn btn-warning mt-2">Cariler</a>
    </div>
@endsection
