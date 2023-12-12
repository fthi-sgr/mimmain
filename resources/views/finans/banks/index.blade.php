@extends('admin.layout.layout')

@section('title')
    Banka Hesapları
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
                    <a href="{{ route('finans.banks.index') }}" class="btn btn-primary btn-block">
                        <h5><span class="title">Kayıtlı Bankalar</span></h5>
                    </a>
                </div>

                <div class="header">

                    <div class="clearfix">

                        <a href="{{ route('finans.banks.create') }}" class="btn btn-primary pull-right">Banka Hesabı
                            Ekle</a>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>

                                    <th><strong>ID</strong></th>
                                    <th><strong>Banka Adı</strong></th>
                                    <th><strong>Etiketler</strong></th>
                                    <th><strong>Banka-Şube</strong></th>
                                    <th><strong>IBAN</strong></th>
                                    <th><strong>Açılış Tarihi</strong></th>
                                    <th><strong>Para Birimi</strong></th>
                                    <th><strong>Bakiye</strong></th>
                                    <th><strong>İşlemler</strong></th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($banks as $banka)
                                    <tr>
                                        <td>{{ $banka->id }}</td>
                                        <td>{{ $banka->banka_adi }}</td>
                                        <td>{{ $banka->etiket }}</td>
                                        <td>{{ $banka->banka_sube }}</td>
                                        <td>{{ $banka->iban }}</td>
                                        <td>{{ $banka->acilis_tarihi }}</td>
                                        <td>{{ $banka->para_birimi }}</td>
                                        <td>{{ $banka->bakiye }}</td>
                                        <td>

                                            <div class="header d-flex justify-content-center">

                                                <ul class="header-dropdown dropdown">

                                                    <li class="dropdown">
                                                        <a href="javascript:void(0);" class="dropdown-toggle"
                                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                                            aria-expanded="false"></a>
                                                        <ul class="dropdown-menu theme-bg gradient">
                                                            <li><a href="{{ route('finans.banks.show', [$banka->id]) }}"><i
                                                                        class="dropdown-icon fa fa-eye"></i> Ayrıntılar</a>
                                                            </li>
                                                            <li><a href="{{ route('finans.banks.edit', [$banka->id]) }}"><i
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
