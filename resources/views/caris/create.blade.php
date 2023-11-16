<!-- resources/views/caris/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Yeni Cari Ekle</h2>

        <form action="{{ route('caris.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="ad">Ad:</label>
                <input type="text" class="form-control" id="ad" name="ad" required>
            </div>
            <div class="form-group">
                <label for="soyad">Soyad:</label>
                <input type="text" class="form-control" id="soyad" name="soyad" required>
            </div>
            <div class="form-group">
                <label for="telefon">Telefon:</label>
                <input type="text" class="form-control" id="telefon" name="telefon" required>
            </div>
            <button type="submit" class="btn btn-primary">Ekle</button>
        </form>
    </div>
@endsection
