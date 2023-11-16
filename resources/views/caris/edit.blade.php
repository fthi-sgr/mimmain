<!-- resources/views/caris/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cari Düzenle</h2>

        <form action="{{ route('caris.update', $cari->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="ad">Ad:</label>
                <input type="text" class="form-control" id="ad" name="ad" value="{{ $cari->ad }}" required>
            </div>

            <div class="form-group">
            <label for="soyad">Soyad:</label>
            <input type="text" class="form-control" id="soyad" name="soyad" value="{{ $cari->soyad }}" required>
            </div>

            <div class="form-group">
            <label for="telefon">Telefon:</label>
            <input type="text" class="form-control" id="telefon" name="telefon" value="{{ $cari->telefon }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>

    </div>
@endsection
