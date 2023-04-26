@extends('layouts.dashboard')

@section('cobase')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- RECENT SALES -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Data Mahasiswa</h3>
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importExcel">
                    IMPORT EXCEL
                </button>
                <!-- Import Excel -->
                <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form method="post" action="/import_excel" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                                </div>
                                <div class="modal-body">
                                    <label>Pilih file excel</label>
                                    <div class="form-group">
                                        <input type="file" name="uploaded_file" required="required">
                                    </div>
        
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="/submitdata" class="btn btn-primary my-3">TAMBAH DATA MANUAL</a>
                <a href="/export_excel" class="btn btn-success my-3">EXPORT EXCEL</a>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table id="sortTable" class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">NIM</th>
                                <th class="border-top-0">NAMA</th>
                                <th class="border-top-0">PRODI</th>
                                <th class="border-top-0">FAKULTAS</th>
                                <th class="border-top-0">18</th>
                                <th class="border-top-0">19</th>
                                <th class="border-top-0">20</th>
                                <th class="border-top-0">22</th>
                                <th class="border-top-0">23</th>
                                <th class="border-top-0">24</th>
                                <th class="border-top-0">25</th>
                                <th class="border-top-0">26</th>
                                <th class="border-top-0">27</th>
                                <th class="border-top-0">STATUS</th>
                                <th class="border-top-0">LINK</th>
                                <th class="border-top-0">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($mahasiswa as $mhs)
                            <tr>
                                <th>{{ $mhs -> NIM}}</th>
                                <th>{{ $mhs -> NAMA}}</th>
                                <th>{{ $mhs -> PRODI}}</th>
                                <th>{{ $mhs -> FAKULTAS}}</th>
                                <th>{{ $mhs[18]}}</th>
                                <th>{{ $mhs[19]}}</th>
                                <th>{{ $mhs[20]}}</th>
                                <th>{{ $mhs[22]}}</th>
                                <th>{{ $mhs[23]}}</th>
                                <th>{{ $mhs[24]}}</th>
                                <th>{{ $mhs[25]}}</th>
                                <th>{{ $mhs[26]}}</th>
                                <th>{{ $mhs[27]}}</th>
                                <th>{{ $mhs -> STATUS}}</th>
                                <th><a href="PKKMB/{{ $mhs -> NIM}}" target="_blank">{{ $mhs -> LINK}}</a></th>
                                <th><form action="/delete/{{ $mhs -> NIM }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                    </svg>
                                    Delete
                                    </button>
                                    </form>
                                </th>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                    <script>
                        $('#sortTable').DataTable({
                            "aaSorting": [],
                                columnDefs: [{
                                orderable: false,
                                targets: [4,5,6,7,8,9,10,11,12]
                        }]});
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
@endsection