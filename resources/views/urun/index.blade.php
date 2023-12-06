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
                    <div class="clearfix ">
                        <a href="{{ route('urun.index') }}" class="btn btn-primary">Tümü</a>
                        <a href="{{ route('urun.index') }}" class="btn btn-primary" title="Ürünler">Ürünler</a>
                        <a href="{{ route('urun.index') }}" class="btn btn-primary">Depo</a>
                        <a href="{{ route('urun.create') }}" class="btn btn-primary pull-right">Ürün Oluştur</a>

                    </div>
                    <hr>
                    <h4><strong id="dynamicTitle">Ürünler</strong></h4>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th><strong>Kod</strong></th>
                                    <th><strong>Barkod</strong></th>
                                    <th><strong>Ad</strong></th>
                                    <th><strong>Etiketler</strong></th>
                                    <th><strong>Stok Kullanım</strong></th>
                                    <th><strong>Alış Fiyatı</strong></th>
                                    <th><strong>Satış Fiyatı</strong></th>
                                    <th><strong>KDV</strong></th>
                                    <th><strong>İndirim</strong></th>
                                    <th><strong>Menşei</strong></th>
                                    <th><strong>Açıklama</strong></th>
                                    <th><strong>Kalan Stok Miktarı</strong></th>
                                    <th><strong>Stok Durumu</strong></th>
                                    <th><strong>Toplam Çıkış Bakiye</strong></th>
                                    <th><strong>Toplam Giriş Bakiye</strong></th>
                                    <th><strong>Ortlama Birim Fiyatı</strong></th>
                                </tr>
                            </thead>
                            <TBody>
                                @foreach ($urun as $urun )
                                <tr>
                                    <td>{{$cari->urun_kodu}}</td>
                                    <td>{{$cari->urun_adi}}</td>
                                    <td>{{$cari->barkod}}</td>
                                    <td>{{$cari->urun_etiketi}}</td>
                                    <td>{{$cari->stok_saklama_brimi}}</td>
                                    <td>{{$cari->mensei}}</td>
                                    <td>{{$cari->gtip_no}}</td>
                                    <td>{{$cari->aciklama}}</td>

                                </tr>

                                @endforeach


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
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js">
    </script>

    <script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Her bir butona tıklama olayını ekle
            $('.btn-primary').on('click', function() {
                // Tıklanan butonun title'ını al ve "dynamicTitle" id'li öğenin içeriğine ekle
                var buttonTitle = $(this).attr('title');
                $('#dynamicTitle').text(buttonTitle);
            });
        });
    </script>
@endsection
