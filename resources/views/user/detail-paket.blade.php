@extends('user.layouts.app')

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
                    <div class="col-4">No Rak</div>
                    <div class="col-1">:</div>
                    <div class="col">3C</div>
                </div>
                <div class="row">
                    <div class="col-4">No Resi</div>
                    <div class="col-1">:</div>
                    <div class="col">P5130834298201312</div>
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis assumenda fugit ab, cumque magnam exercitationem tempora animi, dolores quis suscipit voluptas incidunt ullam quasi odit voluptates reiciendis enim et cum.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection