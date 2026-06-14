@extends('template')
@section('title', 'Edit Data Bedak')
@section('konten')
    <a href="/bedak" class="btn btn-secondary mb-3"> Kembali</a>

    <div class="card">
        <div class="card-body">
            @foreach ($bedak as $b)
                <form action="/bedak/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $b->kodebedak }}">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Merk Bedak</label>
                        <div class="col-sm-10">
                            <input type="text" name="merkbedak" class="form-control" required="required"
                                value="{{ $b->merkbedak }}">
                        </div>
                    </div>
                    <br />
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Stock Bedak</label>
                        <div class="col-sm-10">
                            <input type="number" name="stockbedak" class="form-control" required="required"
                                value="{{ $b->stockbedak }}">
                        </div>
                    </div>
                    <br />
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ketersediaan</label>
                        <div class="col-sm-10 d-flex align-items-center">
                            <div class="form-check form-check-inline me-3">
                                <input class="form-check-input" type="radio" name="tersedia" id="statusAda" value="Y"
                                    {{ $b->tersedia == 'Y' ? 'checked' : '' }}>
                                <label class="form-check-label text-success fw-bold" for="statusAda">Ada</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tersedia" id="statusKosong"
                                    value="N" {{ $b->tersedia == 'N' ? 'checked' : '' }}>
                                <label class="form-check-label text-danger fw-bold" for="statusKosong">Kosong</label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <input type="submit" class="btn btn-warning" value="Simpan Perubahan">
                        </div>
                    </div>
                </form>
            @endforeach
        </div>
    </div>
@endsection
