@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h5>Status</h5>
                    <h6>Bisa diambil</h6>
                </div>
                <div class="d-flex flex-col-reverse pr-3">
                    <a class="button" href="edit-paket">Edit paket</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-4">No Resi</div>
                    <div class="col-1">:</div>
                    <div class="col">12345678A</div>
                </div>
                <div class="row">
                    <div class="col-4">Nama Barang</div>
                    <div class="col-1">:</div>
                    <div class="col">Makanan Kucing</div>
                </div>
                <div class="row">
                    <div class="col-4">Deskripsi</div>
                    <div class="col-1">:</div>
                    <div class="col">
                        12345678A
                        12345678A
                        12345678A
                        12345678A
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection