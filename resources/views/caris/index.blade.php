@extends('admin.layout.layout')

@section('title')
    Cari listesi
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
                    <a href="{{ route('uruns.index') }}" class="btn btn-primary btn-block">
                        <h5><span class="title">Cariler</span></h5>
                    </a>
                </div>

                <div class="header">

                    <div class="clearfix">
                        <a href="#" class="btn btn-primary">Şirket Carileri</a>
                        <a href="#" class="btn btn-primary">Personel Carileri</a>
                        <a href="{{ route('caris.create') }}" class="btn btn-primary pull-right">Cari Oluştur</a>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th> ID</th>
                                    <th>Cari Kodu</th>
                                    <th>Cari Adı</th>
                                    <th>Cari Tipi</th>
                                    <th>Kısa Ad</th>
                                    <th>Etiket</th>
                                    <th>Vergi Numarası</th>

                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th> ID</th>
                                    <th>Cari Kodu</th>
                                    <th>Cari Adı</th>
                                    <th>Cari Tipi</th>
                                    <th>Kısa Ad</th>
                                    <th>Etiket</th>
                                    <th>Vergi Numarası</th>

                                    <th>İşlemler</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($caris as $cari)
                                    <tr>
                                        <td>{{ $cari->id }}</td>
                                        <td>{{ $cari->cari_kodu }}</td>
                                        <td>{{ $cari->cari_adi }}</td>
                                        <td>{{ $cari->cari_tipi }}</td>
                                        <td>{{ $cari->kisa_ad }}</td>
                                        <td>{{ $cari->cari_etiket }}</td>
                                        <td>{{ $cari->vergi_no }}</td>
                                        <td>

                                            <div class="header">

                                                <ul class="header-dropdown dropdown">

                                                    <li class="dropdown">
                                                        <a href="javascript:void(0);" class="dropdown-toggle"
                                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                                            aria-expanded="false"></a>
                                                        <ul class="dropdown-menu theme-bg gradient">
                                                            <li><a href="{{ route('caris.show', [$cari->id]) }}"><i
                                                                        class="dropdown-icon fa fa-eye"></i> Ayrıntılar</a>
                                                            </li>
                                                            <li><a href="{{ route('caris.edit', [$cari->id]) }}"><i
                                                                        class="dropdown-icon fa fa-share-alt"></i>
                                                                    Düzenle</a></li>
                                                            <li><a href="javascript:void(0);"><i
                                                                        class="dropdown-icon fa fa-trash"></i> Sil</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
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
