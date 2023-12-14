@extends('admin.layout.layout')

@section('title')
@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->
@endsection
@section('content')
    <div class="row clearfix">

        <div class="col-lg-12">
            <div class="card">
                <!-- Menu Trigger For Mobile -->
                <div class="">
                    <a href="{{ route('satis.asiparis.index') }}" class="btn btn-primary btn-block">
                        <h5><span class="title">Siparişler</span></h5>
                    </a>
                </div>
                <div class="header">

                    <div class="clearfix">

                        <a href="{{ route('satis.asiparis.create') }}" class="btn btn-primary pull-right">Sipariş Oluştur</a>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped tablo-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th><strong>Cari Bilgisi</strong></th>
                                    <th><strong>Etiketler</strong></th>
                                    <th><strong>Sipariş Seri No</strong></th>
                                    <th><strong>Proje</strong></th>
                                    <th><strong>Durum</strong></th>
                                    <th><strong>Düzenlenme Tarihi</strong></th>
                                    <th><strong>Teslimat Tarihi</strong></th>
                                    <th><strong>Fatura Tutarı</strong></th>
                                    <th><strong>Bakiye</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siparis as $siparis )
                                    <tr>
                                        <td>{{$siparis->cari_adi}}</td>
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
