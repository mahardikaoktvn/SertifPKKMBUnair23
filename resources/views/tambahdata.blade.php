<@extends('layouts.dashboard')

@section('cobase')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- RECENT SALES -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Tambah Data</h3>
                </div>
                <div>
                    <form method="POST" action="/submit">
                        @csrf
                        <div class="form-group row">
                            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jammulai" class="col-sm-2 col-form-label">PRODI</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="prodi" name="prodi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jamselesai" class="col-sm-2 col-form-label">FAKULTAS</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="fakultas" name="fakultas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat" class="col-sm-2 col-form-label">18</label>
                            <div class="col-sm-10">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="delapanbelas" required>
                                <option value="HADIR">Hadir</option>
                                <option value="TIDAK HADIR">Tidak Hadir</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ket" class="col-sm-2 col-form-label">19</label>
                            <div class="col-sm-10">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="sembilanbelas" required>
                                <option value="HADIR">Hadir</option>
                                <option value="TIDAK HADIR">Tidak Hadir</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat" class="col-sm-2 col-form-label">20</label>
                            <div class="col-sm-10">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="duapuluh" required>
                                <option value="HADIR">Hadir</option>
                                <option value="TIDAK HADIR">Tidak Hadir</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat" class="col-sm-2 col-form-label">22</label>
                            <div class="col-sm-10">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="duapuluhdua" required>
                                <option value="HADIR">Hadir</option>
                                <option value="TIDAK HADIR">Tidak Hadir</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat" class="col-sm-2 col-form-label">23</label>
                            <div class="col-sm-10">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="duapuluhtiga" required>
                                <option value="HADIR">Hadir</option>
                                <option value="TIDAK HADIR">Tidak Hadir</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat" class="col-sm-2 col-form-label">24</label>
                            <div class="col-sm-10">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="duapuluhempat" required>
                                <option value="HADIR">Hadir</option>
                                <option value="TIDAK HADIR">Tidak Hadir</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat" class="col-sm-2 col-form-label">25</label>
                            <div class="col-sm-10">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="duapuluhlima" required>
                                <option value="HADIR">Hadir</option>
                                <option value="TIDAK HADIR">Tidak Hadir</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat" class="col-sm-2 col-form-label">26</label>
                            <div class="col-sm-10">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="duapuluhenam" required>
                                <option value="HADIR">Hadir</option>
                                <option value="TIDAK HADIR">Tidak Hadir</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat" class="col-sm-2 col-form-label">27</label>
                            <div class="col-sm-10">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="duapuluhtujuh" required>
                                <option value="HADIR">Hadir</option>
                                <option value="TIDAK HADIR">Tidak Hadir</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat" class="col-sm-2 col-form-label">STATUS</label>
                            <div class="col-sm-10">
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="status" required>
                                <option value="LULUS">Lulus</option>
                                <option value="TIDAK LULUS">Tidak Lulus</option>
                            </select>
                            </div>
                        </div>
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection