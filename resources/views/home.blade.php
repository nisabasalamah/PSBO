@extends('user.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <a class="card-body btn btn-warning text-left text-white" href=google.com>
                    <h5 class="card-title">Menunggu</h5>
                    <h5 class="card-text">5</h5>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <a class="card-body btn btn-success text-left" href=google.com>
                    <h5 class="card-title">Bisa Diambil</h5>
                    <h5 class="card-text">5</h5>
                </a>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <a class="card-body btn btn-primary text-left" href=google.com>
                    <h5 class="card-title">Telah Diambil</h5>
                    <h5 class="card-text">5</h5>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-2">
    <div class="card p-3">
        <div class="row">
            <div class="col sm">
                <p>List Paket</p>
            </div>
            <div class="flex-column-reverse pr-3">
                <button class="btn btn-secondary btn-sm">Filter</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th class="text-center">Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Makanan Kucing</td>
                    <td class="d-flex justify-content-center"><div class="btn btn-warning btn-sm">Menunggu</div></td>
                    <td class="text-center"><a href="detail-paket">Detail</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="d-flex flex-row-reverse pt-3">
        <a class="btn btn-primary" href="tambah-paket">Tambah Barang</a>
    </div>
</div>

@endsection