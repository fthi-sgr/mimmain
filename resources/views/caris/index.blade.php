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
                    <a href="{{ route('caris.index') }}" class="btn btn-primary btn-block">
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
                                    <th> <strong>ID</strong></th>
                                    <th><strong>Cari Kodu</strong></th>
                                    <th><strong>Cari Adı</strong></th>
                                    <th><strong>Cari Tipi</strong></th>
                                    <th><strong>Kısa Ad</strong></th>
                                    <th><strong>Etiket</strong></th>
                                    <th><strong>Vergi Numarası</strong></th>

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

                                            <div class="header d-flex justify-content-center">

                                                <ul class="header-dropdown dropdown">

                                                    <li class="dropdown">
                                                        <a href="javascript:void(0)" class="dropdown-toggle"
                                                            data-toggle="dropdown" role="button" aria-haspopup="true"
                                                            aria-expanded="false"></a>
                                                        <ul class="dropdown-menu theme-bg gradient">
                                                            <li><a href="javascript:void(0)" id="show-cari"
                                                                    data-url="{{ route('caris.show', $cari->id) }}"><i
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


                        <!-- Modal -->
                        <div class="modal fade" id="cariShowModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cari Ayrıntıları</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="container">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover dataTable js-exportable">

                                                <tr>
                                                    <th>ID</th>
                                                    <td>{{ $cari->id }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Cari Kodu</th>
                                                    <td>{{ $cari->cari_kodu }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Cari Türü</th>
                                                    <td>{{ $cari->cari_turu }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Cari Adı</th>
                                                    <td>{{ $cari->cari_adi }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Cari Tipi</th>
                                                    <td>{{ $cari->cari_tipi }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Kısa Ad</th>
                                                    <td>{{ $cari->kisa_ad }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Cari Etiket</th>
                                                    <td>{{ $cari->cari_etiket }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Vergi Numarası</th>
                                                    <td>{{ $cari->vergi_no }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Vergi Dairesi</th>
                                                    <td>{{ $cari->vergi_dairesi }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Yetkili</th>
                                                    <td>{{ $cari->yetkili }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Yetkili Tel</th>
                                                    <td>{{ $cari->yetkili_tel }}</td>
                                                </tr>
                                                <tr>
                                                    <th>E-Mail</th>
                                                    <td>{{ $cari->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Vade Günü</th>
                                                    <td>{{ $cari->vade_gunu }}</td>
                                                </tr>
                                                <tr>
                                                    <th>İskonto</th>
                                                    <td>{{ $cari->iskonto }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Referans</th>
                                                    <td>{{ $cari->referans }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Açıklama</th>
                                                    <td>{{ $cari->aciklama }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <a href="{{ route('caris.edit', [$cari->id]) }}"
                                            class="btn btn-primary mb-4">Düzenle</a>
                                        <a href="{{ route('caris.index', [$cari->id]) }}"
                                            class="btn btn-primary mb-4">Cariler</a>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready(function() {

            $('body').on('click', '#show-cari', function() {
                var cariURL = $(this).data('url');
                $.get(cariURL, function(data) {
                    $('#cariShowModal').modal('show');
                    $('#cari-id').text(data.id);
                    $('#cari-name').text(data.name);
                    $('#cari-email').text(data.email);
                })
            });

        });
    </script>
    <!-- jsPDF JavaScript dosyası -->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js">
    </script>

    <script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js') }}"></script>
@endsection
