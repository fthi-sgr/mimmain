@extends('admin.layout.layout')

@section('title')
Cari listesi
@endsection

@section('css')
<!-- DataTables CSS ve JavaScript dosyaları -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

<!-- Buttons CSS ve JavaScript dosyaları -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
<script type="text/javascript"  src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

@endsection

@section('content')                
                <div class="row clearfix">
       
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>Table Tools<small>Basic example without any additional modification classes</small></h2>
                                <ul class="header-dropdown dropdown">
                                    
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu theme-bg gradient">
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
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
                                        <TBody>
                                        @foreach ($caris as $cari)
                                             <tr>
                                            <td>{{ $cari->id }}</td>
                                            <td>{{ $cari->cari_kodu }}</td>
                                            <td>{{ $cari->cari_adi }}</td>
                                            <td>{{ $cari->cari_tipi}}</td> 
                                            <td>{{ $cari->kisa_ad}}</td>
                                            <td>{{ $cari->cari_etiket }}</td>
                                            <td>{{$cari->vergi_no}}</td>
                                            <td>                  
                                                <!-- <div class="dropdown">
                                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    İşlemler
                                                    </button>
                                                        <div class="dropdown-menu" aria-labelledby="actionDropdown">
                                                            <a class="dropdown-item" href="{{ route('caris.show',[$cari->id]) }}">Ayrıntılar</a>

                                                            <a class="dropdown-item" href="{{ route('caris.edit', [$cari->id]) }}">Düzenle</a>

                                                            <a class="dropdown-item" href="{{ route('caris.destroy', [$cari->id]) }}" onclick="return confirm('Silmek istediğinizden emin misiniz?')">Sil</a>
                                
                                                    </div>
                            
                                                </div> -->
                                                <div class="header">
                                                    
                                                    <ul class="header-dropdown dropdown">
                                    
                                                        <li class="dropdown">
                                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                                            <ul class="dropdown-menu theme-bg gradient">
                                                                <li><a href="{{ route('caris.show',[$cari->id]) }}"><i class="dropdown-icon fa fa-eye"></i> Ayrıntılar</a></li>
                                                                <li><a href="{{ route('caris.edit', [$cari->id]) }}"><i class="dropdown-icon fa fa-share-alt"></i> Düzenle</a></li>  
                                                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Sil</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                
                                                </div> 
                                            </td>

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
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<script src="{{ asset('admin/assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection







