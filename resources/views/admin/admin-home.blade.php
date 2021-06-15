@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Dashboard</h3>
</div>

<div class="container mt-2 pt-2">
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
                    <th>Tanggal Diterima</th>
                    <th class="text-center">No Resi</th>
                    <th class="text-center">NIM</th>
                    <th class="text-center">Alamat Asrama</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>25/05/2021</td>
                    <td class="text-center">P5130834298201312</td>
                    <td class="text-center">P5130834298201312</td>
                    <td class="text-center">P5130834298201312</td>
                    <td class="text-center">
                        <div class="btn btn-warning btn-sm">Menunggu</div>
                    </td>
                    <td class="text-center"><a href="detail-paket">Detail</a></td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>25/05/2021</td>
                    <td class="text-center">P5130834298201312</td>
                    <td class="text-center">P5130834298201312</td>
                    <td class="text-center">P5130834298201312</td>
                    <td class="text-center">
                        <div class="btn btn-success btn-sm">Bisa diambil</div>
                    </td>
                    <td class="text-center"><a href="detail-paket">Detail</a></td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>25/05/2021</td>
                    <td class="text-center">P5130834298201312</td>
                    <td class="text-center">P5130834298201312</td>
                    <td class="text-center">P5130834298201312</td>
                    <td class="text-center">
                        <div class="btn btn-primary btn-sm">Sudah Diambil</div>
                    </td>
                    <td class="text-center"><a href="detail-paket">Detail</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="d-flex flex-row-reverse pt-3">
        <a class="btn btn-primary" href="admin-tambahpaket">Tambah Barang</a>
    </div>
</div>

@endsection