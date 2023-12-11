@extends('admin.layout.layout')

@section('title')
    Depolar
@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->
@endsection

@section('content')
    <div class="row clearfix">

        <div class="col-lg-12">
            <div class="card">
                <!-- Menu Trigger For Mobile -->
              <!-- Menu Trigger For Mobile -->
              <div class="">
                <a href="{{ route('depo.index') }}" class="btn btn-primary btn-block">
                    <span class="title">Ürün ve Hizmetler</span>
                </a>
            </div>

            <div class="header">
                <div class="clearfix ">
                    <a href="{{ route('uruns.index') }}" class="btn btn-primary" title="Ürünler">Ürünler</a>
                    <a href="{{ route('hizmet.index') }}" class="btn btn-primary">Hizmetler</a>
                    <a href="{{ route('depo.index') }}" class="btn btn-primary">Depolar</a>
                    <hr>
                    <a href="{{ route('depos.create') }}" class="btn btn-primary pull-right">Depo Ekle</a>
                </div>
                <h4><strong id="dynamicTitle">Depolar</strong></h4>

            </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Depo Kodu</th>
                                    <th>Depo Adı</th>
                                    <th>Durum</th>
                                    <th>İşlemler</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($depos as $depo)
                                    <tr>
                                        <td>{{ $depo->depo_kodu }}</td>
                                        <td>{{ $depo->depo_adi }}</td>


                                        <td>
                                            <a href="{{ route('depos.edit', $depo->id) }}"
                                                class="btn btn-warning">Düzenle</a>
                                            <form action="{{ route('depos.destroy', $depo->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Emin misiniz?')">Sil</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- jsPDF JavaScript dosyası -->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js">
    </script>

    <script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js') }}"></script>
@endsection
