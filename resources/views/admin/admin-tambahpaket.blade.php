@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Paket</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="resi" class="col-md-4 col-form-label text-md-right">Nomor Resi</label>

                            <div class="col-md-6">
                                <input id="resi" type="text" class="form-control @error('resi') is-invalid @enderror" name="resi" value="{{ old('resi') }}" required autocomplete="resi" autofocus>

                                @error('resi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">NIM</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus>

                                @error('nim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="statusBarang" class="col-md-4 col-form-label text-md-right">Status Barang</label>
                            <div class="col-md-6">
                                <select id="inputState" class="form-control">
                                    <option selected>Pilih...</option>
                                    <option>Menunggu</option>
                                    <option>Bisa Diambil</option>
                                    <option>Sudah Diambil</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="noRak" class="col-md-4 col-form-label text-md-right">No Rak</label>

                            <div class="col-md-6">
                                <input id="noRak" type="text" class="form-control @error('noRak') is-invalid @enderror" name="noRak" value="{{ old('noRak') }}" required autocomplete="noRak" autofocus>

                                @error('noRak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-auto offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah
                                </button>
                            </div>
                            <div class="col-auto">
                                <a href="admin-home" class="btn btn-outline-danger">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection