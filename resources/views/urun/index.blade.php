@extends('admin.layout.layout')

@section('title')
Ürünler Ve Hizmetler
@endsection

@section('css')
<!-- DataTables CSS ve JavaScript dosyaları -->

@endsection

@section('content')
                <div class="row clearfix">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <div class="clearfix">
                                    <a href="{{route('urun.index')}}" class="btn btn-primary">Ürünler</a>
                                    <a href="#" class="btn btn-primary">Hizmetler</a>
                                    <a href="{{route('urun.index')}}" class="btn btn-primary">Depo</a>
                                    <a href="{{route('urun.index')}}" class="btn btn-primary">Tümü</a>
                                    <a href="{{ route('caris.create') }}" class="btn btn-primary pull-right">Cari Oluştur</a>
                                </div>
                                <h1><strong>Cariler</strong></h1>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover dataTable js-exportable">
                                    <thead>
                                            <tr>
                                                <th><strong>Kod</strong></th>
                                                <th><h6><strong>Barkod</strong></h6></th>
                                                <th><h6><strong>Ad</strong></h6></th>
                                                <th><h6><strong>Etiketler</strong></h6></th>
                                                <th><h6><strong>Stok Kullanım</strong></h6></th>
                                                <th><h6><strong>İndirim</strong></h6></th>
                                                <th><h6><strong>Alış Fiyatı</strong></h6></th>
                                                <th><h6><strong>Satış Fiyatı</strong></h6></th>
                                                <th><h6><strong>KDV</strong></h6></th>
                                                <th><h6><strong>Menşei</strong></h6></th>
                                                <th><h6><strong>Kalan Stok Miktarı</strong></h6></th>
                                                <th><h6><strong>Stok Durumu</strong></h6></th>
                                                <th><h6><strong>Toplam Çıkış Bakiye</strong></h6></th>
                                            </tr>
                                        </thead>
                                        <TBody>


                                        </TBody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      @endsection
@section('js')
<!-- jsPDF JavaScript dosyası -->
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection







