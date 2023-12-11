@extends('admin.layout.layout')

@section('title')
@endsection

@section('css')
    <!-- DataTables CSS ve JavaScript dosyaları -->
@endsection
@section('content')
    <div class=" row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <!-- Menu Trigger For Mobile -->
                <div class="">
                    <a href="{{ route('uruns.index') }}" class="btn btn-primary btn-block">
                        <span class="title">Ürün ve Hizmetler</span>
                    </a>
                </div>

                <div class="header">
                    <div class="clearfix ">
                        <a href="{{ route('uruns.index') }}" class="btn btn-primary" title="Ürünler">Ürünler</a>
                        <a href="{{ route('hizmet.index') }}" class="btn btn-primary">Hizmetler</a>
                        <a href="{{ route('depo.index') }}" class="btn btn-primary">Depolar</a>
                        <hr>
                        <a href="{{ route('hizmet.create') }}" class="btn btn-primary pull-right">Hizmet Ekle</a>
                    </div>
                    <h4><strong id="dynamicTitle">Hizmetler</strong></h4>

                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table- striped table-hover dataTable j-exportapble">
                            <thead>
                                <tr>
                                    <th>Kod</th>
                                    <th>Barkod</th>
                                    <th>AD</th>
                                    <th>Etiketler</th>
                                    <th>Kdv</th>
                                    <th>Menşei</th>
                                    <th>Açıklama</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hizmet as $hizmet)
                                    <tr>
                                        <td>{{ $hizmet->hizmet_kodu }}</td>
                                        <td>{{ $hizmet->barkod }}</td>
                                        <td>{{ $hizmet->hizmet_adi }}</td>
                                        <td>{{ $hizmet->hizmet_etiketi }}</td>
                                        <td>{{ $hizmet->kdv_id }}</td>
                                        <td>{{ $hizmet->mensei }}</td>
                                        <td>{{ $hizmet->Aciklama }}</td>

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
